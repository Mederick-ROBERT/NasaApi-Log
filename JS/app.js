let click = 0;

function hiddenToVisible(){
    const planet = document.getElementsByClassName('data');
    for(let planets of planet){
      if(planets.classList.contains('Planet')){
        planets.classList.remove('Planet', 'planet_anim');
        planets.classList.add('hidden');
    }  
    }
    console.log(planet)

    let firstSlider = planet[click];
    firstSlider.classList.add('Planet');
    firstSlider.classList.add('planet_anim')
}

document.addEventListener('DOMContentLoaded', hiddenToVisible)

// fonction clickPlus

function clickPlus(){
    if (click === 7){
        click = 0;
        hiddenToVisible();
    } else {
        click = click + 1;
        hiddenToVisible();
    }
}

// fonction clickMinus

function clickMinus(){
    if (click === 0){
        click = 7;
        hiddenToVisible();
    } else {
        click = click - 1;
        hiddenToVisible();  
    }
}