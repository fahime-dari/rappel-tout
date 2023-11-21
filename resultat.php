
<?php

        include ('model/mat.php');
        // include ('/document.php');
        session_start();
        $materiel1= new materiel($_SESSION["ref_mat"], $_SESSION["lib_mat"], $_SESSION["date_doc"], $_SESSION["date_exp"]);
        // $message1= new message($_SESSION["message"]);
        $materiel1->create();
        // $message1->create();
        

        $heure=date("H:i:s");   
        echo "La création a bien été effectuée à ".$heure.".";




?>