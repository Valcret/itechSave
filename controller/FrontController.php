<?php

class FrontController
{
    protected $boutique;
    protected $rayon;

    public function __controller()
    {
    $this -> boutique = new BoutiqueModel();
    $this  -> rayon = new RayonModel();
    }
    
    public function displayNav()
    {
        $boutiques = $this->boutique ->getTableau()
        $rayons = $this->rayon ->getTableau()
    }
}