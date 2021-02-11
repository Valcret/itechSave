<?php

class RayonController extends ManagerController
{
    public function display()
    {    
        //récupération des données : la liste des rayons
        $rayon = new RayonModel();
        $rayons = $rayon -> getTableau();
             
        //gestion des templates
        $template = "rayon.phtml";
        include "views/dashboard.phtml";
    }
}