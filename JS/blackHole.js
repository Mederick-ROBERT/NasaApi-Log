const changeButton = document.getElementById('blackHole');
const body = document.querySelector('body');
const toggleON = document.getElementById('toggle_on');
const toggleOFF = document.getElementById('toggle_off');

function change(){
    body.classList.toggle('whiteChange');
    body.classList.toggle('blackChange');
    toggleON.classList.toggle('hiddenToggle');
    toggleON.classList.toggle('toggleON_entrance');
    toggleOFF.classList.toggle('hiddenToggle');
    toggleOFF.classList.toggle('toggleOFF_entrance');
}

changeButton.addEventListener('click', change)

