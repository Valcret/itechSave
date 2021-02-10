<?php

class AddBoutiqueController  extends ManagerController
{
    //methode pour charger la page boutique
    public function display()
    {
        $template = "addBoutique.phtml";
        include "views/dashboard.phtml";
    }
    

    //ajouter la nouvelle boutique dans la table boutique
    public function getBoutique()
    {
     $model = new BoutiqueModel();
     $addBoutique = $model->insertBoutique($_POST['boutique']);
     
      header('location:boutique');
     
    }
}

 