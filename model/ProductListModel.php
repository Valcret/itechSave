<?php

class ProductListModel extends ModelManager
{
    public function getTableau()
    {
    //$post=requete pour page products
   $req = "SELECT  statut,marque,produits.nom AS nom,rayon.nom AS rayon,boutique.nom AS boutique
FROM produits
INNER JOIN rayon ON produits.id_rayon=rayon.id_rayon
INNER JOIN boutique ON rayon.id_boutique=boutique.id_boutique";

    return    $this -> queryFetchAll($req);

    }
       //insertion d'un nouveau produit dans table produits
    public function insertProduit($nom,$marque,$reference,$etiquette,$prix,$ecoparticipation,$statut,$description_principale,$titre_1,$image_1,$description_1,$titre_2,$image_2,$description_2,$titre_3,$image_3,$description_3,$rayon)
    {
       $req = "INSERT INTO produits(nom, marque,reference,etiquettes,prix,ecoparticipation,statut,description_principale,titre_1,image_1,description_1,titre_2,image_2,description_2,titre_3,image_3,description_3,id_rayon
       ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
       $this-> query($req,[$nom,$marque,$reference,$etiquette,$prix,$ecoparticipation,$statut,$description_principale,$titre_1,$image_1,$description_1,$titre_2,$image_2,$description_2,$titre_3,$image_3,$description_3,$rayon]);
      
    }
}
