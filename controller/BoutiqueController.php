<?php

class BoutiqueController  extends ManagerController
{
    //methode pour charger la page productList
    public function display()
    {
      $boutique = new BoutiqueModel();
      $boutiques = $boutique  -> getTableau();
      
            //gestion des templates
     $template = "boutique.phtml";
      include "views/dashboard.phtml";
    }
}

 