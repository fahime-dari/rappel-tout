<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ajout de matériel</title>
    </head>
    <body>
        <center>
            // Formulaire de confirmation de saisie 
            <form action="confirmation.php" method="POST" >
                <h1>AJOUT DE MATÉRIEL</h1>
                <p>
                    // Afficher les données entrées dans les champs précédemment
                    Référence du matériel :<?php echo $_POST["ref_mat"]?><br>
                    Libéllé du matériel :<?php echo $_POST["lib_mat"]?><br>
                </p>
                // Bouton "Valider" 
                <input type="submit" value="Valider ?"/>
            </form>    
        </center>
    </body>
</html>
