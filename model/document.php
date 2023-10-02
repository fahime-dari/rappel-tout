<?php 

// Créer la classe Document 

// Attributs 

class document{
    private $ref_doc;
    private $date_doc;
    private $date_exp;
    private $ref_mat; 

    // Constructeurs 

    function __construct($rd,$dd,$de,$rm)
    {
        $this->ref_doc=$rd;
        $this->date_doc=$dd;
        $this->date_exp=$de;
        $this->ref_mat=$rm;
    }


    // Getters 

    public function getRef_doc()
    {
        return $this->ref_doc;
    }

    public function getDate_doc()
    {
        return $this->date_doc;
    }

    public function getDate_exp()
    {
        return $this->date_exp;
    }

    public function getRef_mat()
    {
        return $this->ref_mat;
    }

    // Setters 

    public function setRef_doc($rd)
    {
        $this->ref_doc=$r;
    }

    public function setDate_doc($dd)
    {
        return $this->date_doc;
    }

    public function setDate_exp($de)
    {
        return $this->date_exp;
    }

    public function setRef_mat($rm)
    {
        return $this->ref_mat;
    }


        // Méthodes CRUD 

        // CREATE 

        public function create()
        {
            include 'connexion.php';
            $sql="INSERT INTO document (ref_doc, date_doc, date_exp) VALUES (:ref_doc, :date_doc, :date_exp)";
            $stmt=$dbco->prepare($sql);
            $stmt->bindParam(':ref_doc',$this->ref_doc);
            $stmt->bindParam('date_doc',$this->date_doc);
            $stmt->bindParam('date_exp',$this->date_exp);
            $stmt->execute();
        }

        // RETRIEVE 
        public function retrieve($ref_doc)
        {
            include 'connexion.php';
            $req="SELECT * from document where ref_doc=:ref_doc";
            $stmt=$dbco->prepare($sql);
            $stmt->bindParam('ref_doc', $this->ref_doc);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            print_r($result);
        }

        // UPDATE 
        function update()
        {
            include 'connexion.php';
            $sql="UPDATE document set date_doc=:date_doc, date_exp=:date_exp, ref_mat=:ref_mat where ref_doc=:ref_doc";
            $stmt=$dbco->prepare($sql);
            $stmt->bindParam(':ref_doc', $this->ref_doc);
            $stmt->bindParam('date_doc', $this->date_doc);
            $stmt->bindParam('date_exp', $this->date_exp);
            $stmt->bindParam('ref_mat', $this->ref_mat);
            $stmt->execute();
        }

        // DELETE 
        function delete()
        {
            include 'connexion.php';
            $sql="DELETE FROM document where ref_doc=:ref_doc";
            $stmt=$dbco->prepare($sql);
            $stmt->bindParam(':ref_doc',this->ref_doc);
            $stmt->execute();

        }
    }
?>