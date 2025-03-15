// Floating navbar
document.getElementsByClassName("btn")[0].addEventListener("click",()=>{
    document.getElementsByClassName("floating-navbar")[0].classList.toggle("floating-navbar-show")

})
// navbar dynamic auth
let Auth = document.getElementById("Auth");
let noAuth = document.getElementById("noAuth");

async function render() {
    const response = await fetch('user/profile', {
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
  