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
            // Formulaire d'ajout de documentation 
            <form action="./valid_doc.php" method="POST" >
            <h1>AJOUT DE DOCUMENTATION</h1>
            <p>
                Référence du document : <input type="text" name="ref_doc"/>
                <br>
                Date de création : <input type="date" name="date_doc"/>
                <br>
                Date d'expiration : <input type="date" name="date_exp"/>
                <br>
                Référence du matériel : <input type="text" name="ref_mat"/>
                <br>
                // Bouton de validation
                <input type="submit" name="VALIDER">
            </p>
        </form>    
    </center>
</body>
</html>
