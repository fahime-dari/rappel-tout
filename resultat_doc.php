<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Validation du DOCUMENT</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <?php
        // include ('model/mat.php');
        include ('model/document.php');
        session_start();
        $doc1= new document($_SESSION["ref_doc"], $_SESSION["date_doc"], $_SESSION["date_exp"], $_SESSION["ref_mat"]);
        $doc1->create();


        $heure=date("H:i:s");           
        echo "Le document a bien été crée à ".$heure.".";

    ?>
