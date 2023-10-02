<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Résultat du matériel</title>
        <link rel="stylesheet" href="./styles/style.css">
    </head>
    <?php
        include ('model/mat.php');
        session_start();
        $materiel1= new materiel($_SESSION["ref_mat"], $_SESSION["lib_mat"]);
        $materiel1->create();


        $heure=date("H:i:s");           
        echo "Le matériel a bien été crée à ".$heure.".";

    ?>


