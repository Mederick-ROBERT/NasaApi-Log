const picture = document.getElementById('pictureDay')
const title = document.getElementById('title')
const container = document.getElementById('container')
const photographer = document.getElementById('photographe')

const univers = async () =>{
    const image = "https://api.nasa.gov/planetary/apod?api_key=KAHHcwbDzwVGHLuXFRV97jeZVLR4Nwa7woEOGOgt"

    const dataP = await fetch(image);

    const responseP = await dataP.json()

    console.log(responseP);

    picture.src = responseP.url
    title.textContent = responseP.title
    photographer.textContent += responseP.copyright
    container.textContent = responseP.explanation
}

univers();