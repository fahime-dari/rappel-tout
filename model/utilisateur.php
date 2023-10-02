<?php

// Créer la classe Utilisateur 

// Attributs 

class Utilisateur{
    private $login; 
    private $mdp;


    // Constructeurs 

    function __construct($l,$m)
    {
        $this->login=$l;
        $this->mdp=$m;

    }

    // Getters 

    public function getLogin()
    {
        return $this->login;
    }

    public function getMdp()
    {
        return $this->mdp;
    }

    // Setters 

    public function setLogin($l)
    {
        $this->login=$login;
    }

    public function setMdp($m)
    {
        $this->mdp=$mdp;
    }

    // Méthodes CRUD 

    // CREATE 

    public function create() 
    
    {
        include 'connexion.php';
        $sql="INSERT INTO utilisateur (login, mdp) VALUES (:login, :mdp)";
        $stmt=$dbco->prepare($sql);
        $stmt->bindParam('login',$this->login);
        $stmt->bindParam('mdp',$this->mdp);
        $stmt->execute();
    }
    // RETRIEVE 

    public function retrieve($l)
    {
        include 'connexion.php';
        $sql="SELECT * FROM  utilisateur where login=:login";
        $stmt=$dbco->prepare($sql);
        $stmt->execute();
        $result= $stmt->fetch(PDO::FETCH_ASSOC);
        print_r($result);
        
    }
}