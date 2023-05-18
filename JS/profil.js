const changeButtonPicture = document.getElementById('changePicture--Button');
const changePictureSlider = document.getElementById('changePicture--slider');


function affichePicture(){
    changePictureSlider.classList.toggle('hiddenSlider');
    if(changePictureSlider.classList.contains('hiddenSlider')){
        
    } else {
        const suppImg = document.querySelector('.activeImg')
        if(suppImg === null){
            changeImg();
        }
    }
}

changeButtonPicture.addEventListener('click', affichePicture);

// function onclick of button

const currentImgSLider = document.querySelector('.activeImg');
const imgSlider = document.querySelector('.slider--picture');


let u = 0;

let sliderImage = [
    '1',
    '2',
    '3',
]


function changeImg(){
    for (const current of sliderImage) {
        const newSliderImage = document.createElement('img');
        newSliderImage.src = "../image/spaceman/moonSpaceMan"+current+".png";

        newSliderImage.classList.add("hiddenSlider");
        newSliderImage.classList.add('supp')

        imgSlider.prepend(newSliderImage);
     }

     let firstSliderImage = document.querySelector('.hiddenSlider'); // selectionne la première image

     firstSliderImage.classList.add('activeImg');
     firstSliderImage.classList.remove('hiddenSlider');
     
}


function clicRight(){
    const imageAll = document.querySelectorAll('.hiddenSlider');

    let imageCurrent = document.querySelector('.activeImg');

    if (imageAll[u] != imageAll[imageAll.length - 1] ){
        if (imageCurrent == imageAll[u]){
            
            console.log('OK')
            let imageBefore = imageAll[u];
            imageCurrent = imageAll[u + 1];
            imageBefore.classList.remove('activeImg')
            imageCurrent.classList.add('activeImg');
            u = u+1;
        } else {
            console.log('NOK');
        }
    } else {
        let imageBefore = imageAll[u];
        imageCurrent = imageAll[0];
        imageBefore.classList.remove('activeImg')
        imageCurrent.classList.add('activeImg');
        u = 0;
    }
    console.log(u);
}



function clicLeft(){
    const imageAll = document.querySelectorAll('.hiddenSlider');



    let imageCurrent = document.querySelector('.activeImg');


    if (imageAll[u] != imageAll[0]){
        if (imageCurrent == imageAll[u]){
            
            console.log('OK')
            let imageBefore = imageAll[u];
            imageCurrent = imageAll[u - 1];
            imageBefore.classList.remove('activeImg')
            imageCurrent.classList.add('activeImg');
            u = u-1;
        } else {
            console.log('NOK');
        }
    } else {
        let imageBefore = imageAll[u];
        imageCurrent = imageAll[imageAll.length - 1];
        imageBefore.classList.remove('activeImg')
        imageCurrent.classList.add('activeImg');
        u = imageAll.length - 1;
    }
}
