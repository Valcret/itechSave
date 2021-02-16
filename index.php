<?php
session_start();
//spl_autoload_register(); // eviter d'écrire les noms des models et control
spl_autoload_register(function ($class) 
{
    if(stristr($class, 'controller'))
    {
    require 'controller/'.$class.'.php';
    }
    if(stristr($class, 'model'))
    {
    require 'model/'.$class.'.php';
    }
});


// voir s'il y a une page demandé par l'utilisateur
if(!isset($_GET['page']))
{
    // par défaut
    //$controller = new AccueilController();
   // $controller -> display();
}

else
{
    switch($_GET['page'])
    {
        case 'admin' :
        $controller = new AdminController();
        $controller -> display();
        break;
        
        case 'login' :
        $controller = new AdminController();
        $controller ->  login();
        break;
        
        case 'dashboard':
        $controller = new DashboardController();
        $controller -> display();
        break;
        
        case 'productList':
        $controller = new ProductListController();
        $controller -> display();
        break;
        
        case 'addProduct':
        $controller = new AddProductController();
        $controller -> display();
        break;
    
        case 'submitAddProduct':
        $controller = new AddProductController();
        $controller -> getProduct();
        break;
        
        case 'ProductListController':
        $controller = new ProductListController();
        $controller -> updateStatutP();
        break;
        
        case 'boutique':
        $controller = new BoutiqueController();
        $controller -> display();
        break;
        
        case 'addBoutique':
        $controller = new AddBoutiqueController();
        $controller -> display();
        break;
        
        case 'updateBoutique':
        $controller = new UpdateBoutiqueController();
        $controller -> display();
        break;
        
        case 'submitAddBoutique':
        $controller = new AddBoutiqueController();
        $controller -> getBoutique();
        break;
        
        case 'submitUpdateBoutique':
        $controller = new UpdateBoutiqueController();
        $controller -> upDataBoutique();
        break;
        
        case 'deleteBoutique':
        $controller = new BoutiqueController();
        $controller -> deleteB();
        break;
    
        case 'rayon':
        $controller = new RayonController();
        $controller -> display();
        break;
        
        case 'addRayon':
        $controller = new AddRayonController();
        $controller -> display();
        break;
        
        case 'submitAddRayon':
        $controller = new AddRayonController();
        $controller -> getRayon();
        break;
        
        case 'updateRayon':
        $controller = new UpdateRayonController();
        $controller -> display();
        break;
        
        case 'submitUpdateRayon':
        $controller = new UpdateRayonController ();
        $controller -> upDataRayon();
        break;
        
        case 'deleteRayon':
        $controller = new RayonController();
        $controller -> deleteR();
        break;
        
        case 'logout':
        $controller = new AdminController();
        $controller -> logout();
        break;
    }
}
