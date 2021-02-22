/****** VARIABLES***********
 ***************************/
let buttonCookie;
let photo1;
let photos;

/******FONCTIONS***********
 ***************************/


function addCookie() {
    $.get('index.php?page=FrontController')
    // pour cacher la barre cookiebar
    document.getElementById("cookiebar").style.transform = "translateY(100px)";
}

function bigImage() {
    let bigImage = document.getElementById('bigImage')
    // met la 1ère fois en grand dans div Big Image
    bigImage.innerHTML = photo1

    // choisit la grande image selon le click
    let photos = document.querySelectorAll('.photos')
    for (let i = 0; i < photos.length; i++) {
        photos[i].addEventListener('click', function() {
            console.log(photos[i])
            bigImage.innerHTML = photos[i]
        })
    }
}
/*********CODE***********
 ***************************/

document.addEventListener('DOMContentLoaded', function() {

    // add event listener pour clic bouton cookie barre
    buttonCookie = document.getElementById('cookieOk');
    buttonCookie.addEventListener('click', addCookie);
    // pour faire la transition avec la cookie barre
    document.getElementById("cookiebar").style.transform = "translateY(-100px)";
    // pour faire le carroussel
    photo1 = document.querySelector('.photos');
    // pour faire la big Image par defaut
    bigImage()


})
