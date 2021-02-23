<?php

class FrontListRayonController extends FrontController
{
    public function display()
    {    
        //récupération des données : la liste des rayons
        $rayon = new RayonModel();
        $rayons = $rayon -> getTableau();
             
        //gestion des templates
        $template = "frontlistrayon.phtml";
        include "views/dashboard.phtml";
    
    header('location:rayon');
    }
}