<?php

class ImageModel extends ModelManager
{
        public function insertPhotos($lastId,$src)
    {
        $req = "INSERT INTO photos(id_produit,src,alt) VALUES(?,?,null)";
        $this ->query($req,[$lastId,$src]);
    }
    
}