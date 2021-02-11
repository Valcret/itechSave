<?php

class BoutiqueModel extends ModelManager
{
    public function getTableau()
    {
    //$post=requete boutique model
   $req = "SELECT id_boutique,nom FROM boutique ORDER BY nom ASC";
   return $this -> queryFetchAll($req);
    }
    
    //insertion d'une nouvelle boutique
    public function insertBoutique($nom)
    {
       $req = "INSERT INTO boutique (nom) VALUES(?)";
       $this-> query($req,[$nom]);
       echo "boutique bien ajoutée";
    }
    
    
    //afficher le nom de la boutique
     public function findBoutique($params)
    {
    //$post=requete boutique model
        $req = "SELECT id_boutique, nom FROM boutique WHERE id_boutique= ?";
     return $this -> queryFetch($req,[$params]);
    }
    
    

    //update une boutique
   public function updateBoutique($nom,$id_boutique)
    {
        $req = "UPDATE boutique SET nom=? WHERE id_boutique=?";
         $this-> query($req,[$nom,$id_boutique]);
       echo "boutique bien mise à jour";
    }
    
  
    //suppr une boutique
     public function deleteBoutique($id)
    {
        $req = "DELETE FROM boutique WHERE id_boutique = ?";
        $this -> query($req,[$id]);
    }
    
}




