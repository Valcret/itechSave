<?php

class ArticleController extends FrontController 
{
  
// affiche la page article avec id_produit = $_GET['id']
  public function display ()
    {
        $product = new ProductListModel();
        // pour les données du produit
        $displayed = $product -> displayProd($_GET['id']);
       
        $photo = new ImageModel();
         // pour diaporma
        $photos = $photo -> addPhoto($_GET['id']);        
        $template= 'article.phtml';
        include 'views/layout.phtml';
    }

}





//Liste 
/*appel page avec le navigateur id_produit ?
$_GET[id]=5

 
Récupère Navigateur
Table: boutique
Table: rayon
user 
panier temporaire // 

// 
Main : article
Table : produits
-references
-marque
-prix
-Decriptif 1 -2-3
-image1

Table : photos 


$displayed['id_produit']
$displayed['nom']
$displayed['marque']
$displayed['reference']
$displayed['etiquettes']
$displayed['prix']
$displayed['ecoparticipation']
$displayed['statut']
$displayed['description_principale']
$displayed['titre_1']
$displayed['image_1']
$displayed['description_1']
$displayed['titre_2']
$displayed['image_2']
$displayed['description_2']
$displayed['titre_3']
$displayed['image_3']
$displayed['description_3']





$displayed['id_rayon']
$displayed['rayon']
$displayed['id_boutique']
$displayed['boutique']
$displayed['id_photo']
$displayed['src_photo']
*/

