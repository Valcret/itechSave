/****** VARIABLES***********
 ***************************/
let suppr;
let supprBis;
let statutButton


/******FONCTIONS***********
 ***************************/

const suppressConfirm = (event) => {

    let conf = window.confirm('êtes vous surs de vouloir supprimer cette entrée ?');

    if (!conf) {
        event.preventDefault();
    }
}

function suppressConfirmBis() {

    let conf = window.confirm('êtes vous surs de vouloir supprimer cette entrée ?');

    if (conf) {
        window.location = "deleteBoutique-" + this.dataset.id;
    }
}

function changeStatut() {
    // tableau qu'on envoie à php (produtListController)
    let updateStatut = { 'id': this.dataset.id, 'statut': this.dataset.statut };
    console.log(updateStatut);

    //requête AJAX pour changer le statut des produits
    $.get('index.php?page=ProductListController', updateStatut);

    //afficher sur php changement de bouton et changement status 1ercolonnee 
    let buttonMettreEnB = `<button data-id='${this.dataset.id}' data-statut='En boutique' class='btn btn-outline-success btn-sm btn-block statutp'><i class='fas fa-check-square'></i>Mettre en boutique</button>`;

    let buttonRetirer = `<button data-id='${this.dataset.id}' data-statut='Retiré' class='btn btn-outline-danger btn-sm btn-block statutp'><i class='fas fa-pen'></i> Retirer</button>`;

    let buttonMettreAtt = `<button data-id='${this.dataset.id}' data-statut='En attente' class='btn btn-outline-secondary btn-sm btn-block statutp'><i class='fas fa-pen'></i>Mettre en attente</button>`
    let nameStat = this.parentElement.parentElement.querySelector('td:nth-child(4)')


    if (this.dataset.statut === "En boutique") {
        this.parentElement.innerHTML = buttonRetirer
        nameStat.innerHTML = "<span class='green'>En boutique</span>"

    }
    else if (this.dataset.statut === "Retiré") {
        this.parentElement.innerHTML = buttonMettreAtt
        nameStat.innerHTML = "<span class='red'>Retiré</span>"

    }
    else {
        this.parentElement.innerHTML = buttonMettreEnB
        nameStat.innerHTML = "<span class='grey'>En attente</span>"


    }
    console.log(this)
    //a ameliorer
    statutButton = document.querySelectorAll('.statutp');
    for (let i = 0; i < statutButton.length; i++) {
        statutButton[i].addEventListener('click', changeStatut);
    }

}
/*********CODE***********
 ***************************/

document.addEventListener('DOMContentLoaded', function() {
    // popup pour demander si on veut vraiment supprimer
    suppr = document.querySelectorAll('.suppr');
    for (let i = 0; i < suppr.length; i++) {
        suppr[i].addEventListener('click', suppressConfirm);
    }

    supprBis = document.querySelectorAll('.supprBis');
    for (let i = 0; i < supprBis.length; i++) {
        supprBis[i].addEventListener('click', suppressConfirmBis);
    }

    // add event listener pour clic on button statut du produit change
    statutButton = document.querySelectorAll('.statutp');
    for (let i = 0; i < statutButton.length; i++) {
        statutButton[i].addEventListener('click', changeStatut);
}

})
