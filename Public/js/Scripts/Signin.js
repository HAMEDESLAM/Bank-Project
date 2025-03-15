
// form inputs
let form = document.getElementsByTagName("form")[0];    

// function signInAlert(message,parent) {
//     let alert = document.getElementById("signin-alert");
//     alert.innerHTML = `
//     <i class="fa-solid fa-circle-info"></i>
//      ${message}
//     `;
//     alert.style.display = "block";
//     parent.appendChild(alert);
// }

// Form Validation
form.onsubmit = async function (e) {
    e.preventDefault();
    
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value;

    const response = await fetch('user/login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ username, password }),
        credentials: 'include'  
    });

    if (response.ok) {
        window.location.href = '/account.php';  
    } else {
        console.log("not good")
        const errorData = await response.json();
        let alert = document.getElementById("signin-alert");
        alert.style.display = "block"
        alert.innerText = errorData.message || 'Login failed. Please try again.';
    }
}

