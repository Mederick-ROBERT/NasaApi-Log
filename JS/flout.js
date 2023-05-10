const filtt = document.getElementById('wrapper');
const buttonA = document.getElementById('button')

function flout(){
    filtt.classList.toggle('filter');
}

buttonA.addEventListener('click', flout);