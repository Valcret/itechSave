<?php

class RayonModel extends ModelManager
{
    public function getTableau()
    {
    //$post=requete boutique model
   $req = "SELECT id_rayon, nom, id_rayon FROM rayon ORDER BY nom ASC";
   return $this -> queryFetchAll($req);
    }
    
    //insertion d'une nouvelle rayon
    public function insertRayon($nom,$boutique)
    {
       $req = "INSERT INTO rayon (nom,id_boutique) VALUES(?,?)";
       $this-> query($req,[$nom,$boutique]);
       echo "Nouveau rayon bien ajouté";
    }
    
    //suppr
    
}