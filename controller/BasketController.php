<?php

class BasketController
{
  
    // affiche la page article avec id_produit = $_GET['id']
    public function addToBasket()
    {
        $id = $_POST['product_id'];
        
        $productModel = new ProductListModel();
        $product = $productModel->displayProd($id);
        
        $basketModel = new BasketModel();
        $basketModel->addProduct($product,1);
        
        // redirection vers la page produit
        
        header('Location: index.php?page=article&id='.$id);
        //header('Location: article&id='.$id);
    }
    
    public function getBasketJSON()
    {
        if(isset($_SESSION['basket']) == true )
        {
            $json = json_encode($_SESSION['basket']);
        }
        else
        {
            $json = json_encode([]);
        }
       
        echo $json;
    }

}



