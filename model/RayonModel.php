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
    public function insertRayon($nom,$id_boutique)
    {
       $req = "INSERT INTO rayon (nom,id_boutique) VALUES(?,?)";
       $this-> query($req,[$nom,$id_boutique]);
       echo "Nouveau rayon bien ajouté";
    }
    
        //afficher le nom du rayon
     public function findRayon($params)
    {
    //$post=requete rayon model
      $req = "SELECT id_rayon, nom FROM rayon WHERE id_rayon= ?";
     return $this -> queryFetch($req,[$params]);
    }
    
    
    //update rayon
    public function updateRayon($nom,$id_rayon)
    {
        $req = "UPDATE rayon SET nom=? WHERE id_rayon=?";
        $this-> query($req,[$nom,$id_rayon]) ;
        echo " update rayon ok!";
    }
    
    // delete rayon
    
    public  function deleteRayon($id)
    {
        $req = "DELETE FROM rayon WHERE id_rayon =?";
        $this -> query($req,[$id]);
    }
}