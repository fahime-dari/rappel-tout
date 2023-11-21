<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <center>
            <img src="./styles/logo_blanc.png" alt="logo">
            <h1>Bienvenue sur "Rappel-Tout" !</h1>   
            <h1>Toutes les documentations</h1>
            <a href="ajout_doc.php" class="btn">Ajouter un document</a>
            <?php 
                include 'controller/connexion.php'; 
                include 'model/document.php'; 

                $req=new document('','','','');
                $req->findAll();

           ?>
    </center>
    </body>
</html>
