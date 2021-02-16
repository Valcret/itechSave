<?php

class UpdateRayonController extends ManagerController
{
    private $ID;
    
    public function __construct()
    {
        parent::__construct();
        $this->ID = $_GET['id'];
    }
    
    
    public function display()
    {
        //affiche id_rayon dans le form
        $model = new RayonModel();
        $rayon = $model->findRayon($this->ID);
        
        $template = "addRayon.phtml";
        include "views/dashboard.phtml";
    }
    
    public function upDataRayon()
    {
     $model = new RayonModel();
     $upRayon = $model->updateRayon($_POST['rayon'],$this->ID);
      header('location:rayon');
    }
    
}