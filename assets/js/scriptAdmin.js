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
    //requête AJAX pour changer le statut des produits
    $.get('index.php?page=ProductListController', updateStatut);
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
    statutButton = document.querySelectorAll('.statutP');
    for (let i = 0; i < statutButton.length; i++) {
        statutButton[i].addEventListener('click', changeStatut);
    }
})
