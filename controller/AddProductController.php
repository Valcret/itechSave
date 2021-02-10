<?php

class AddProductController  extends ManagerController
{
     private $uploaddir;
     private $adresse;
     public $lastId;
     
    public function __construct() 
    {
        parent::__construct();
        $this-> uploaddir = 'assets/img/uploads';
        $this-> adresse=[];
        $this ->lastId = 0;
    }
    
    //methode pour charger la page productList
    public function display()
    {
        $boutique = new BoutiqueModel();
        $boutiques = $boutique-> getTableau();
        $rayon = new RayonModel();
        $rayons = $rayon-> getTableau();
        $template = "addProduct.phtml";
        include "views/dashboard.phtml";
    }

    public function getProduct()
    {
         $this -> uploadImages();
        
     $model = new ProductListModel();
     $addProduct = $model-> insertProduit($_POST["nom"], $_POST["marque"], $_POST["refproduit"], $_POST["etiquette"], $_POST["prix"], $_POST["ecopart"], $_POST["statut"], $_POST["description"], $_POST["titre1"], $this->adresse["imaged1"], $_POST["texte1"], $_POST["titre2"], $this->adresse["imaged2"],$_POST["texte2"], $_POST["titre3"], $this->adresse["imaged3"], $_POST["texte3"],$_POST['rayon']);
     
     $this ->lastId = $model->getLastId();
            $this -> uploadPhotos();

      header('location:productList');
     
    }
    
       // recupère toutes les images du formulaire
    public function uploadImages()
    {
        foreach ($_FILES as $key => $file)
            {
                $tmp_name = $file["tmp_name"];
                // basename() peut empêcher les attaques de système de fichiers;
                // la validation/assainissement supplémentaire du nom de fichier peut être approprié
                $name = basename($file["name"]);
                move_uploaded_file($tmp_name, "{$this->uploaddir}/$name");
                
                //créer le lien vers l'image
                $this->adresse[$key]=$this->uploaddir.'/'.$name;
            }
    }    
            
     public function uploadPhotos()
    {
        $photos = new ImageModel();
        foreach ($_FILES as $key => $file)
            {
                // on transmet le lien et idproduit à la bdd photos
                if($key=="image1"||$key=="image2"||$key=="image3"||$key=="image4"||$key=="image5") 
                {
                     $insertion = $photos-> insertPhotos($this-> lastId,$this->adresse[$key]);
                }
            }
    }
    
    
    
}

