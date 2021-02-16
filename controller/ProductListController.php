<?php   

class ProductListController  extends ManagerController
{
    //methode pour charger la page productList
    public function display()
    {
      $productList = new ProductListModel();
      $productLists = $productList  -> getTableau();
      
      

            //gestion des templates
     $template = "productList.phtml";
      include "views/dashboard.phtml";
    }
    

    private function colorStatut($param)
       {
           switch($param)
           {
           case "En boutique":
                $statut= "<span class='green'>En boutique</span>";
                break;
            case "Retiré":
                $statut="<span class='red'>Retiré</span>";
                break;
            case "En attente":
                $statut="<span class='grey'>En attente</span>";
                break;
           }
           return $statut;
       }
       
    
   
   private function setButton($statut, $id)
   {
       switch($statut)
       {
            case "En boutique":
                $button="<button data-id='$id' data-statut='Retiré' class='btn btn-outline-danger statutP'><i class='fas fa-pen'></i> Retirer</button>";
                break;
            case "Retiré":
                $button="<button data-id='$id' data-statut='En attente' class='btn btn-outline-success statutP'><i class='fas fa-pen'></i> Remettre</button>";
                break;
            case "En attente":
                $button="<button data-id='$id' data-statut='En boutique' class='btn btn-outline-success statutP'><i class='fas fa-check-square'></i> Mettre en boutique</button>";
                break;
        }
        return $button;
   }
       
       // fonction pour la requête ajax
       public function updateStatutP(){
      //var_dump($_GET);
           $id = $_GET["id"];
           $statut = $_GET["statut"];
           
      $productStatut = new ProductListModel();
      $productStatuts = $productStatut -> updateStatutProduit($statut,$id);
      header('location:productList');
       }

   }

 