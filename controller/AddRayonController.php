<?php

class AddRayonController  extends ManagerController
{
    //methode pour charger la page productList
    public function display()
    {
        $boutique = new BoutiqueModel();
      $boutiques = $boutique  -> getTableau();
        
        $template = "addRayon.phtml";
        include "views/dashboard.phtml";
    }
    
    public function getRayon()
    {
     $model = new RayonModel();
     $addRayon = $model->insertRayon($_POST['rayon'],$_POST['boutique'] );
     
      header('location:rayon');
     
    }
    
}

 