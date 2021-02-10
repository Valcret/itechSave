/****** VARIABLES***********
 ***************************/
let suppr;


/******FONCTIONS***********
 ***************************/

const suppressConfirm = (event) => {
    let conf = confirm('êtes vous surs de vouloir supprimer cette entrée ?');
    if (!conf) {
        event.preventDefault();
    } else {

    }
}

/*********CODE***********
 ***************************/
document.addEventListener('DOMContentLoaded', () => {
    suppr = document.getElementById('suppr');
    suppr.document.addEventListener('click', suppressConfirm)
})