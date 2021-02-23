<?php

class AdminController {
    
// login

    //methode pour charger la page admin
    public function display()
    {
      //gestion des templates
      $template = "admin.phtml";
      include "views/layoutback.phtml";
    }

      // récuperer les données et vérifier infos
      public function login()
      {
        //var_dump($_POST);
        $pseudo = $_POST['email'];
        $pwd = $_POST['psw'];
        
        // instancie la requête (vérifier login et mdp)
        $adminLog = new AdminModel();
       $user = $adminLog -> getLogin($pseudo);
        //var_dump($user);

      // vérifier mdp et email
      if(!empty($_POST) // formulaire non vide
      &&($user) // resultat de requête non vide
      &&(password_verify ($pwd,$user['mot_de_passe'] ))) // verifier si mdp est true
      {
            //accès
         $_SESSION['user'] = 'admin';
           //appelle le template dashboard.phtml
            $template = "accueil.phtml";
            include "views/dashboard.phtml";
      }
      
      // erreur mdp incorrect
      else 
      {
           $error = "merci de mettre un identifiant et un mot de passe valide";
          //formulaire
          //charger à nouveau le formulaire et afficher le message d'error
          //gestion des templates
    $template = "admin.phtml";
    include "views/layout.phtml";
             
      }

      }
      
      // pour se deconnecter et revenir sur 
      public function logout()
      {
         session_destroy();  
         unset($_SESSION["user"]);
         header("location:admin");  
      }
      
}