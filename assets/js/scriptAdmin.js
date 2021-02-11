/****** VARIABLES***********
 ***************************/
let suppr;
let supprBis;


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
        window.location = "deleteBoutique-"+this.dataset.id;
    }
}

/*********CODE***********
 ***************************/
document.addEventListener('DOMContentLoaded', function() {
    suppr = document.querySelectorAll('.suppr');
    for (let i = 0; i < suppr.length; i++) {
        suppr[i].addEventListener('click', suppressConfirm);
    }
    
     supprBis = document.querySelectorAll('.supprBis');
    for (let i = 0; i < supprBis.length; i++) {
        supprBis[i].addEventListener('click', suppressConfirmBis);
    }
})



