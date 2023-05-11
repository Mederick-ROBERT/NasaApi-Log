const button = document.getElementById('button')
const list = document.getElementById('hiddenNavbar')
const hiddenButton = document.getElementById('blackHole_Button');
const signUp = document.getElementById('logIn');

function navbar(){
    list.classList.toggle('hiddenNavbar');
    list.classList.toggle('active');
    list.classList.toggle('nav_entrance');
    hiddenButton.classList.toggle('hidden_blackHole_Button');
    signUp.classList.toggle('hiddenNavbar');
}

