<?php

class ManagerController {

    public function __construct() 
{
    $this-> checkSession();
}

    //vérification session
    protected function checkSession()
    {
        if(!isset($_SESSION['user'])|| $_SESSION['user']!='admin')
        {
            header('location:admin');
        }
    }    
}