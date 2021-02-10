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
       
    
   
   private function setButton($statut)
   {
       switch($statut)
       {
            case "En boutique":
                $button="<button class='btn btn-outline-danger '><i class='fas fa-pen'></i> Retirer</button>";
                break;
            case "Retiré":
                $button="<button class='btn btn-outline-success'><i class='fas fa-pen'></i> Remettre</button>";
                break;
            case "En attente":
                $button="<button class='btn btn-outline-success'><i class='fas fa-check-square'></i> Mettre en boutique</button>";
                break;
        }
        return $button;
   }
       
       
       
   }

 