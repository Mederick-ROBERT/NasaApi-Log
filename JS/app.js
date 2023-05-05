let click = 0;

function hiddenToVisible(){
    const planet = document.getElementsByClassName('data');
    for(let planets of planet){
      if(planets.classList.contains('Planet')){
        planets.classList.remove('Planet');
        planets.classList.add('hidden');
    }  
    }
    console.log(planet)

    let firstSlider = planet[click];
    firstSlider.classList.add('Planet');
}

document.addEventListener('DOMContentLoaded', hiddenToVisible)

// fonction clickPlus

function clickPlus(){
    click = click + 1;
    hiddenToVisible();
}

// fonction clickMinus

function clickMinus(){
    click = click - 1;
    hiddenToVisible();
}