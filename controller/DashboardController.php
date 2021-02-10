<?php

class DashboardController extends ManagerController
{
    public function display ()
    {
        $template= 'accueil.phtml';
        include 'views/dashboard.phtml';
    }
    
    
}