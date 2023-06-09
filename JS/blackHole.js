const changeButton = document.getElementById('blackHole');
const body = document.querySelector('body');
const toggleON = document.getElementById('toggle_on');
const toggleOFF = document.getElementById('toggle_off');


window.addEventListener('load' , function(){
    let bodyTheme = localStorage.getItem('theme')
    if(bodyTheme == 'dark'){
        body.classList.remove('whiteChange');
        body.classList.add('blackChange');
        toggleON.classList.toggle('hiddenToggle');
        toggleOFF.classList.toggle('hiddenToggle');
    }
})



function change(){
    body.classList.toggle('whiteChange');
    body.classList.toggle('blackChange');
    toggleON.classList.toggle('hiddenToggle');
    toggleON.classList.toggle('toggleON_entrance');
    toggleOFF.classList.toggle('hiddenToggle');
    toggleOFF.classList.toggle('toggleOFF_entrance');
}

changeButton.addEventListener('click', change)

const theme = {

    init : function(){

        toggleON.addEventListener('click', function(){
            localStorage.setItem('theme', 'white');
        })

        toggleOFF.addEventListener('click', function(){
            localStorage.setItem('theme', 'dark')
        })
    }
}

theme.init();

