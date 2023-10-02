<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil</title>
        <link rel="stylesheet" href="./styles/style.css">
    </head>
    <body>
        <center>
            <img src="styles/logo_blanc.png" alt="logo_blanc">
            <form action="./valid_mat.php" method="POST" >
            <h1>AJOUT DE MATERIEL</h1>
            <p>
                Référence du matériel : <input type="text" name="ref_mat"/>
                <br>
                Libellé du matériel : <input type="date" name="lib_mat"/>
                <br>
                <input type="submit" name="VALIDER">
            </p>
        </form>    
        </center>
    </body>
    </html>