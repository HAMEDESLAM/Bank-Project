

// navbar dynamic auth
let Auth = document.getElementById("Auth");
let noAuth = document.getElementById("noAuth");

async function render() {
    const response = await fetch('/user/profile', {
        method: 'GET',
        credentials: 'include'  
    });

    if (!response.ok) {
        Auth.remove();
    }
    else{
        noAuth.remove()
    }
} 
  
render();
  