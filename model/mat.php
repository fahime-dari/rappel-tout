<?php

// Création la classe Matériel 

class materiel{
    
    private $ref_mat;
    private $libelle_mat;


// Constructeurs 

function __construct($rm,$lm){
    $this->ref_mat=$rm;
    $this->libelle_mat=$lm;

}

// Getters 

public function getRef_mat()
    {
        return $this->ref_mat;
    }

public function getLibelle_mat()
    {
        return $this->libelle_mat;
    }

// Setters 

public function setRef_mat($rm)
{
    $this->ref_mat=$r;
}

public function setLibelle_mat($lm)
{
    $this->libelle_mat=$lm;
}


    // Méthodes CRUD 

    // CREATE 


    public function create()
    {
        include 'connexion.php';
        $sql="INSERT INTO materiel(ref_mat, libelle_mat) VALUES (:ref_mat, :libelle_mat)";
        $stmt=$dbco->prepare($sql);
        $stmt->bindParam(':ref_mat', $this->ref_mat);
        $stmt->bindParam(':libelle_mat', $this->libelle_mat);
        $stmt->execute();

    }


    // RETRIEVE

    public function retrieve($ref_mat)
    { 
        $req="SELECT * FROM materiel WHERE ref_mat=:ref_mat'";
        $stmt=$dbco->prepare($sql);
        $stmt->bindParam(':ref_mat', $this->ref_mat);
        $stmt->bindParam(':libelle_mat', $this->libelle_mat);
        $stmt->execute();
    }

    // UPDATE 

    function update()
    {
        include 'connexion.php';
        $sql="UPDATE materiel SET libelle_mat=:libelle_mat where ref_mat=:ref_mat";
        $stmt=$bdd->prepare($req);
        $stmt->bindParam(':ref_mat', $this->ref_mat);
        $stmt->bindParam(':libelle_mat', $this->libelle_mat);
        $stmt->execute();
    }

    // DELETE 

    function delete()
    {
        include 'connexion.php';
        $sql="DELETE FROM materiel where ref_mat=:ref_mat";
        $stmt=$dbco->prepare($sql);
        $stmt->bindParam(':libelle_mat',$this->libelle_mat);
        $stmt->execute();
    }



    }


?> 