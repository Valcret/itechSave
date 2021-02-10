<?php

class AdminModel extends ModelManager
{
    
    
    
    
    public function getLogin($param)
    {
    //$post=requete admoncontrol
   $req = "SELECT email,mot_de_passe FROM utilisateurs WHERE email=?";

    return    $this -> queryFetch($req,[$param]);

    }
}

