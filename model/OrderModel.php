<?php

class OrderModel extends ModelManager
{
    public function createOrder()
    {
        // Creer une commande en BD
        
        $sql = "INSERT INTO commandes(`date`,`statut`,`id_client`) VALUES(NOW(),?,?)";
        
        $parameters = ['commande' , 1];
        
        $this->query($sql,$parameters);
        
        //====================================
        
        $orderId = $this->getLastId();
        
        for($i = 0; $i < count($_SESSION['basket']); $i++)
        {
            $quantity = $_SESSION['basket'][$i]['quantity'];
            $price = $_SESSION['basket'][$i]['product']['prix'] * $quantity;
            $productId = $_SESSION['basket'][$i]['product']['id_produit'];
            $sql = "INSERT INTO details(prix,quantite, id_produit,id_commande) VALUES(?,?,?,?)";
            $parameters = [$price,$quantity,$productId, $orderId];
            $this->query($sql,$parameters);
        }
        
        unset($_SESSION['basket']);
    }
    
    
    
}