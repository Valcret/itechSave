<?php

class ProductListModel extends ModelManager
{
    public function getTableau()
    {
    //$post=requete pour page products (back)
   $req = "SELECT  statut,marque,produits.nom AS nom,rayon.nom AS rayon,boutique.nom AS boutique
FROM produits
INNER JOIN rayon ON produits.id_rayon=rayon.id_rayon
INNER JOIN boutique ON rayon.id_boutique=boutique.id_boutique";

    return    $this -> queryFetchAll($req);

    }
       //insertion d'un nouveau produit dans table produits (back)
    public function insertProduit($nom,$marque,$reference,$etiquette,$prix,$ecoparticipation,$statut,$description_principale,$titre_1,$image_1,$description_1,$titre_2,$image_2,$description_2,$titre_3,$image_3,$description_3,$rayon)
    {
       $req = "INSERT INTO produits(nom, marque,reference,etiquettes,prix,ecoparticipation,statut,description_principale,titre_1,image_1,description_1,titre_2,image_2,description_2,titre_3,image_3,description_3,id_rayon
       ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
       $this-> query($req,[$nom,$marque,$reference,$etiquette,$prix,$ecoparticipation,$statut,$description_principale,$titre_1,$image_1,$description_1,$titre_2,$image_2,$description_2,$titre_3,$image_3,$description_3,$rayon]);
      
    }
    
    // requête pour page article (front)
    public function produitArticle ()
    {
        $req = "SELECT id_produit,marque,produits.nom AS nom,rayon.nom AS rayon,boutique.nom AS boutique,prix,reference,description_1,titre_1,image_1,description_2,titre_2,image_2,description_3,titre_3,image_3,ecoparticipation
                FROM produits
                INNER JOIN rayon ON produits.id_rayon=rayon.id_rayon
                INNER JOIN boutique ON rayon.id_boutique=boutique.id_boutique
                WHERE id_produit=?";
        return    $this -> queryFetchAll($req);
    }
    
        public function produitListeMenu()
    {
            //$post=requete pour la page d'accueil (front)
        $req = "SELECT marque,produits.nom AS nom,rayon.nom AS rayon,boutique.nom AS boutique
                FROM produits
                INNER JOIN rayon ON produits.id_rayon=rayon.id_rayon
                INNER JOIN boutique ON rayon.id_boutique=boutique.id_boutique
                WHERE statut='En boutique'";
            return    $this -> queryFetchAll($req);

    }
}
