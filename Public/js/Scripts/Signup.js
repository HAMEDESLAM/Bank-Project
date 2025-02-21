
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

function signUpAlert(message,parent) {
    console.log(parent.children);
    let alert = document.getElementById("signup-alert");
    alert.innerHTML = `
    <i class="fa-solid fa-circle-info"></i>
     ${message}
    `;
    alert.style.display = "block";
    if (parent.parentElement.parentElement.firstElementChild === parent.parentElement) {
        prev.click();
    }
    else {
        next.click();
    }
    parent.appendChild(alert);
}
form.onsubmit = async function(e) {
    e.preventDefault();
    if (Fullname.value.trim().split(/\s+/).length != 5) {
        signUpAlert("Full name must be 5 words.",Fullname.parentElement);
        return;
    }
    let datenow = new Date();
    if (new Date(dob.value) > datenow) {
        signUpAlert("Invalid date of birth.",dob.parentElement);
        return;
    }
    let datec = Number.parseInt((datenow - new Date(dob.value)) / 1000 / 60 / 60 / 24 / 365);
    if (datec < 21 ) {
        signUpAlert("Age must be at least 21",dob.parentElement);
        return;
    }
    if (nationalId.value.length != 14) {
        signUpAlert("National ID must be 14 digits.",nationalId.parentElement);
        return;
    }
    if (phoneNumber.value.length != 11) {
        signUpAlert("Phone number must be 11 digits.",phoneNumber.parentElement);
        return;
    }
    if (password.value !== confirmPassword.value) {
        signUpAlert("Passwords do not match.",password.parentElement);
        return;
    }

    let user = {
        fullname: Fullname.value,
        birthDate: dob.value,
        nationalId: nationalId.value,
        address: address.value,
        phoneNumber: phoneNumber.value,
        email: email.value,
        password: password.value
    };

    let response = await fetch("/user/register", {
        method: "POST",
        body: JSON.stringify(user),
        headers: {
            "Content-type": "application/json; charset=UTF-8"
        }
    });

    let data = await response.json();
    if (response.ok) {
        window.localStorage.setItem("IdHash", data._id);
        window.location.href = "/account.html";
    } else {
        alert(data.message || "Registration failed.");
    }
}