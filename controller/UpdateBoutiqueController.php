<?php

class UpdateBoutiqueController extends ManagerController 
{
    private $ID;
    
    public function __construct()
    {
        parent::__construct();
        $this->ID = $_GET['id'];
    }
    public function display()
    {
        //affiche id_boutique dans le form
     $model = new BoutiqueModel();
     $boutique = $model->findBoutique($this->ID);
     
     $template = "addBoutique.phtml";
     include "views/dashboard.phtml";
    }
    
        public function upDataBoutique()
    {
     $model = new BoutiqueModel();
     $upBoutique = $model->updateBoutique($_POST['boutique'],$this->ID);
      header('location:boutique');
     

    }
    
}





