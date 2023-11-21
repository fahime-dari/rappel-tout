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
            <form action="./valid_doc.php" method="POST" >
            <h1>AJOUT DE DOCUMENTATION</h1>
            <p>
                Référence du document : <input type="text" name="ref_doc"/>
                <br>
                Date d'expiration : <input type="date" name="date_exp"/>
                <br>
                Référence du matériel :
                <select id="refMatListBox" name="refMatListBox">
                <?php
                    include 'controller/connexion.php';
                    $sql = "SELECT ref_mat FROM materiel";
                    $stmt = $dbco->prepare($sql);
                    $stmt->execute();
                    $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    // Afficher chaque enregistrement dans la liste déroulante
                    foreach ($resultats as $row) {
                        echo "<option value='" . $row['ref_mat'] . "'>" . $row['ref_mat'] . "</option>";
                    }
                 ?>
                </select>
                <br>
                Libellé du matériel : <input type="file" name="fichier_pdf"/>
                <br>

                <input type="submit" name="VALIDER">
            </p>
        </form>    
    </center>
</body>
</html>


