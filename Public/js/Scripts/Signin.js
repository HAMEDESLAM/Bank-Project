
// form inputs
let form = document.getElementsByTagName("form")[0];    

form.onsubmit = async function (e) {
    e.preventDefault();
    
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    const response = await fetch('/user/login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ email, password }),
        credentials: 'include'  
    });

    if (response.ok) {
        window.location.href = '/account.html';  // Redirect to account page on successful login
    } else {
        const errorData = await response.json();
        let alert = document.getElementById("signin-alert");
        alert.classList.remove("d-none")
        alert.innerText = errorData.message || 'Login failed. Please try again.';
    }
}

