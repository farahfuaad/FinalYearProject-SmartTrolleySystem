/*===== LOGIN SHOW and HIDDEN =====*/
const 
loginIn = document.getElementById('login-in'),
loginUp = document.getElementById('login-up')

signIn.addEventListener('click', ()=>{
    // Remove classes first if they exist
    loginIn.classList.remove('none')
    loginUp.classList.remove('block')

    // Add classes
    loginIn.classList.toggle('block')
    loginUp.classList.toggle('none')
})

var usr = document.getElementById

if(usr=="admin" || ps=="1234"){
    button = window.location.href = "inventory.html";
}
else{
    button = window.location.href = "login.html";
}
