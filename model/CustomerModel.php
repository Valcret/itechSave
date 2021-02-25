<?php

class CustomerModel extends ModelManager
{
    public function register()
    {
        // Creer une commande en BD
        $sql = "INSERT INTO clients(
        `email_cli`,
        `pwd_cli`,
        `nom_cli`,
        `prenom_cli`,
        `adress_cli`,
        `codepost_cli`,
        `ville_cli`,
        `pays_cli`,
        `tel_cli`
        ) VALUES(?,?,?,?,?,?,?,?,?)";
        
        $parameters = [ 
            $_POST['email'], 
            password_hash ( $_POST['password'], PASSWORD_ARGON2I ), 
            $_POST['lastname'], 
            $_POST['firstname'],
            $_POST['address'],
            $_POST['zipcode'],
            $_POST['city'],
            $_POST['country'],
            '007'
        ];
        
        $this->query($sql,$parameters);

    }
    
    public function checkLogin( $email , $password)
    {
        $hash = $this->getHash($email);
        return password_verify($password, $hash);
        // password verify :
        // - extraire le sel
        // - concatener le sel au password
        // - hasher le password salé
        // - comparer le nouveau hash et l ancien hash
        // - retourne un booleen
    }
    
    private function getHash($email)
    {
        //$post=requete admoncontrol
        $req = "SELECT pwd_cli FROM clients WHERE email_cli=?";
    
        return  $this -> queryFetch($req,[$email])['pwd_cli'];

    }
    
    
}