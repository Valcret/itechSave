<?php

class FrontController
{
    protected $navBoutique;
    protected $navRayon;
    
public function __construct()
{
        $this->  setNav();
}
    public function setNav()
    {
        $boutique = new BoutiqueModel();
        $rayon = new RayonModel();
        $this-> navBoutique = $boutique -> displayNavBoutique();
        $this-> navRayon = $rayon -> displayNavRayon();
    }
    public function createCookie()
    {

            setcookie('test',true,time()+365*24*3600);
    }
}
