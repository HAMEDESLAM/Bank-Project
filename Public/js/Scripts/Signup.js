let formParts = document.getElementsByClassName('form-part');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let btn = document.getElementById('submit');
let form = document.getElementsByTagName("form")[0];

// form inputs
let Fullname = document.getElementById("name");
let dob = document.getElementById("dob");
let nationalId = document.getElementById("nationalId");
let address = document.getElementById("address");
let phoneNumber = document.getElementById("phoneNumber");
let email = document.getElementById("email");
let password = document.getElementById("password");
let confirmPassword = document.getElementById("confirmPassword");


phoneNumber.addEventListener("keydown",(e)=>{
    if(e.key === "Enter"){
        next.click()  
    }
})

// Form sliding
next.onclick = function() {
    formParts[1].classList.add('active');
    formParts[1].classList.remove('disabled');
    formParts[0].classList.add('disabled');
    formParts[0].classList.remove('active');
    btn.removeAttribute('disabled');
    next.classList.add('disabled');
    next.classList.remove('active'); 
    prev.classList.add('active');
    prev.classList.remove('disabled');
    email.focus()
}

prev.onclick = function() {
    formParts[0].classList.add('active');
    formParts[0].classList.remove('disabled');
    formParts[1].classList.add('disabled');
    formParts[1].classList.remove('active');
    btn.setAttribute('disabled', true);
    prev.classList.add('disabled');
    prev.classList.remove('active');
    next.classList.add('active');
    next.classList.remove('disabled');
}

// form validation
function signUpAlert(message,parent,els) {
    let alert = parent.querySelector(".signup-alert");
    if(!alert){
        alert = document.querySelector("form > #signup-alert").cloneNode();
        alert.id = ""
        alert.classList.remove("alert","alert-danger","text-center","mt-3")
        alert.classList.add("signup-alert")
    }
    alert.innerHTML = `
    <i class="fa-solid fa-circle-info"></i>
     ${message}
    `;
    alert.style.display = "block";
    if (parent.parentElement.parentElement.firstElementChild === parent.parentElement) {
        prev.click();
    }
    parent.appendChild(alert);

    els.forEach(element => {
        element.addEventListener("input", function validateInput() {
            if (isValidInput(element)) {
                alert.style.display = "none";
                element.removeEventListener("input", validateInput);
            }
        });
    });
}
function isValidInput(el) {
    if (el === Fullname) {
        console.log(el)
        return Fullname.value.trim().split(/\s+/).length === 5;
    }
    else if (el === dob) {
        let datenow = new Date();
        let datec = Number.parseInt((datenow - new Date(dob.value)) / 1000 / 60 / 60 / 24 / 365);
        return new Date(dob.value) <= datenow && datec >= 21 && datec <= 100;
    }
    else if (el === nationalId) {
        return nationalId.value.trim().length === 14;
    }
    else if (el === phoneNumber) {
        return phoneNumber.value.trim().length === 11;
    }
    else if (el === password || el === confirmPassword) {
        return password.value === confirmPassword.value;
    }
    return true;
}
form.onsubmit = async function(e) {
    e.preventDefault();
    if (!isValidInput(Fullname)) {
        signUpAlert("الأسم يجب ان يكون خماسي",Fullname.parentElement,[Fullname]);
        return;
    }
    else if (!isValidInput(dob)) {
        signUpAlert("العمر يجب ان يكون على الأقل 21 و على الأكثر 100",dob.parentElement,[dob]);
        return;
    }
    if (!isValidInput(nationalId)) {
        signUpAlert("الرقم القومي يجب ان يتكون من 14 رقم",nationalId.parentElement,[nationalId]);
        return;
    }
    if (!isValidInput(phoneNumber)) {
        signUpAlert("رقم الهاتف يجب ان يتكون من 11 رقم",phoneNumber.parentElement,[phoneNumber]);
        return;
    }
    if (!isValidInput(password)) {
        signUpAlert("كلمات المرور غير متطابقه",password.parentElement,[password,confirmPassword]);
        return;
    }


    let user = {
        fullname: Fullname.value,
        birthDate: dob.value,
        nationalId: nationalId.value.trim(),
        address: address.value.trim(),
        phoneNumber: phoneNumber.value.trim(),
        email: email.value.trim(),
        password: password.value.trim()
    };

    let response = await fetch("user/register", {
        method: "POST",
        body: JSON.stringify(user),
        headers: {
            "Content-type": "application/json"
        }
    });
    console.log(response)
    let data = await response.json();
    
    if (response.ok) {
        window.localStorage.setItem("IdHash", data._id);
        window.location.href = "/account.php";
    } else {
        alert = document.querySelector("form > #signup-alert");
        alert.innerHTML = data.message || "Registration failed.";
        alert.style.display = "block"
        alert.classList.add("alert","alert-danger","text-center","mt-3")
    }
}