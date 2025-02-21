// render user data
async function Render() {
    try {
        const response = await fetch('/user/profile', {
            method: 'GET',
            credentials: 'include'  
        });
  
        if (!response.ok) {
            throw new Error('Failed to fetch user data. Please log in.');
        }
        
        const data = await response.json();
        
        document.getElementById("showname").innerText = data.user.fullname.split(" ").slice(0,3).join(" ");
        document.getElementById("showfullname").value = data.user.fullname;
        document.getElementById("showphone").value = data.user.phoneNumber;
        document.getElementById("showemail").value = data.user.email;
  
    } catch (error) {
        console.error('Error fetching data:', error);
    } finally{
        console.log("operation has done")
    }
}
  
window.onload = Render;
  

// update start
let updateButton = document.getElementById("update");
updateButton.onclick = async function() {
    try {
        let fullname = document.getElementById("showfullname").value 
        let phoneNumber = document.getElementById("showphone").value;
        let email = document.getElementById("showemail").value;
        const response = await fetch('/user/update', {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json'
            },
            credentials: 'include',
            body: JSON.stringify({ fullname, phoneNumber, email })
        });
        
        if (!response.ok) {
            throw new Error(data.message);
        }

        const data = await response.json();
        document.getElementById("showname").innerText = data.user.fullname.split(" ").slice(0,3).join(" ");
        document.getElementById("showfullname").value = data.user.fullname;
        document.getElementById("showphone").value = data.user.phoneNumber;

    } catch (error) {
        console.error('Error updating data:', error);
    }
};
// update end

// logout
let logout = document.getElementById("logout")
logout.onclick  = async function(){
    const response = await fetch('/user/logout', {
        method: 'POST',
        credentials: 'include'  
    });
    window.location.href = "/";
}
// logout end

// loan
document.addEventListener('click',function(e){
    if(e.target.classList.contains('btn') && e.target.parentElement.parentElement.parentElement.classList.contains('card')){
        e.target.parentElement.parentElement.parentElement.classList.toggle('card-show');
        e.target.parentElement.parentElement.parentElement.parentElement.classList.toggle('position-relative');
    }
    else if(!document.getElementsByClassName("cards-container")[0].contains(e.target)){
        document.querySelectorAll('.card').forEach(function(card){
            card.classList.remove('card-show');
            card.parentElement.classList.add('position-relative');
        });
    }
})

