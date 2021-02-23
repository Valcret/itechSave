<?php

class ImageModel extends ModelManager
{
        public function insertPhotos($lastId,$src)
    {
        $req = "INSERT INTO photos(id_produit,src,alt) VALUES(?,?,null)";
        $this ->query($req,[$lastId,$src]);
    }
    
       public function addPhoto($id_produit)
    {
        $req = "SELECT id_produit,src,id_photo AS id,alt
        FROM photos 
        WHERE id_produit= ?";
        return $this -> queryFetchAll($req,[$id_produit]);
    }
    
    
}