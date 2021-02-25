<?php

class FrontController
{
    protected $navBoutique;
    protected $navRayon;
    protected $navProduit;
    
    public function __construct()
    {
        $this->  setNav();
    }
    
    public function setNav()
    {
        $boutique = new BoutiqueModel();
        $rayon = new RayonModel();
        $produit = new ProductListModel();
        
        $this-> navBoutique = $boutique -> displayNavBoutique();
        $this-> navRayon = $rayon -> displayNavRayon();
        $this-> navProduit = $produit-> getTableau();
    }
    
    
    public function createCookie()
    {

        setcookie('test',true,time()+365*24*3600);
    }
}
