<?php

class BasketModel
{
    public function __construct()
    {
        if(isset($_SESSION['basket']) == false )
        {
            $_SESSION['basket'] = [];
        }
    }
    
    public function addProduct( $product , $quantity )
    {
        /*
        
        
        [
            [ 
                'product' => [...] ,
                'quantity'=> 5
            ]
            ,
            [
                ....
            ]
        ]
        
        */
        
        $data = [ 'product' => $product , 'quantity' => $quantity ];

        $productId = $product['id_produit'];
        
        //var_dump($data);
        
        $found = false;
        
        foreach( $_SESSION['basket'] as $i => $item )
        {
            if( $item['product']['id_produit'] == $productId )
            {
                $_SESSION['basket'][$i]['quantity'] += $quantity;
                $found = true;
            }
        }
        
        // est ce qu'on a mis a jour la quantité?
        
        if( $found == false )
        {
            array_push($_SESSION['basket'] , $data );
        }
        
        
        
        /*
        //roaming the array $basket
         
         foreach ($this->basket as $this->article) 
        {
            foreach ($this->article as $this->setProduct)
            {
            
            // n'a t-on pas oublié un rang ? foreach($ages as $clef => $valeur)
                
                //if $product already exist...
                if(isset($this->setProduct['id'])||!empty($this->setProduct['id']))
                {
                    //...adding quantity to the existent one
                   $this->article['quantity']+=$quantity; 
                }
                
                //either...
                else
                {
                    //adding the new product
                    $newArticle = ["product"=>$product,"quantity"=>$quantity];
                     array_push ($this->basket, $newArticle );

                }
            }
        
        }*/
        // stocker le produit et la quantité dans la session
        
        // + 1 coca
        // + 2 coca => 3 cocas

    }
    
    public function removeProduct( $product )
    {
        
    }
    
    public function getTotalPrice()
    {
        
    }
}
?>
