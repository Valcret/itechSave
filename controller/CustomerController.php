<?php

class CustomerController extends FrontController
{
  
    // affiche la page article avec id_produit = $_GET['id']
    public function display ()
    {
    
        
        //pour afficher page
        $template = 'register.phtml';
        include 'views/layout.phtml';
    }
    
    public function signUp()
    {
        // Verification du formulaire
        
        if( empty($_POST['email']) == true )
        {
            header('location: index.php?page=register');
        }
        else
        {
            $model = new CustomerModel();
            $model->register();
            
            var_dump($model->checkLogin('aaa', 'password'));
        }
        
        
        
    }

}



