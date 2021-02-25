<?php

class ArticleController extends FrontController 
{
  
  // affiche la page article avec id_produit = $_GET['id']
  public function display ()
    {
  
        $product = new ProductListModel();
        // pour les données du produit
        $displayed = $product -> displayProd($_GET['id']);
       
        $photo = new ImageModel();
         // pour diaporma
        $photos = $photo -> addPhoto($_GET['id']);   
        
        
        //var_dump($_SESSION['basket']);
        /*
        echo '<pre>';
        print_r($_SESSION['basket']);
        echo '</pre>';
        */
        
        //pour afficher page
        $template= 'article.phtml';
        include 'views/layout.phtml';
    }

}



