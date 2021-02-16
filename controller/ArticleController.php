<?php

class Article extends FrontController 
{
  public function display ()
    {
        $template= 'article.phtml';
        include 'views/layout.phtml';
    }
}





//Liste 
/*appel page avec le navigateur id_produit ?

 
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

*/

