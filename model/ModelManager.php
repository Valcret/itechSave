<?php

abstract class ModelManager
{
    
    // class permettant de récupérer les données de bases de données
    protected $bdd;
    
    public function __construct()
    {
        //connexion à la bdd
    $this-> bdd = new PDO('mysql:host=home.3wa.io:3307;dbname=live-44_itech;charset=utf8','cecilev','MjUwYjQwOTgxMTg5NzAwYTRjNDc5OTA23Wa!');
    
    // trouver les erreurs de requête
    $this-> bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    
    public function queryFetch($req,$params = [])
    {
        //preparation
        $query = $this -> bdd -> prepare($req);
        //executer la requete
        $query -> execute($params);
        //recupère les datas
        return $query -> fetch(PDO::FETCH_ASSOC);
    }


   public function queryFetchAll($req,$params = [])
    {
        //preparation
        $query = $this -> bdd -> prepare($req);
        //executer la requete
        $query -> execute($params);
        //recupère les datas
        return $query -> fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function query($req,$params = [])
    {
         //preparation
        $query = $this -> bdd -> prepare($req);
        //executer la requete
        $query -> execute($params);
         var_dump($query-> errorInfo());
    }
    
   
    public function getLastId()
    {

    return $this -> bdd ->lastInsertId();
    
    
    }  
    
    
}

