<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Validation de document</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
<FORM action="resultat_doc.php" METHOD="POST">
    <?php 
    session_start();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $ref_doc=$_POST['ref_doc'];
        $date_exp=$_POST['date_exp'];
        $ref_mat=$_POST['ref_mat'];

        $_SESSION['ref_doc']=$_POST['ref_doc'];
        $_SESSION['date_exp']=$_POST['date_exp'];
        $_SESSION['ref_mat']=$_POST['ref_mat'];
        
            echo '<h2>Données confirmées:</h2>';
            echo 'Référence du document :' .$ref_doc. '</p>';

            echo 'Date de création :' .$date_doc. '</p>';
            echo 'Date expiration :' .$date_exp. '</p>';
            echo 'Référence du matériel :' .$ref_mat. '</p>';
        
        

    }
    $libelle_doc = $_FILES['fichier_pdf']['name'];

        include_once 'model/document.php';
        include_once 'model/mat.php';

        $materiel = new Materiel('', '');
        $document = new Document('', '', '', '');

        $materiel->create_mat();

        if (isset($_FILES['fichier_pdf']) && $_FILES['fichier_pdf']['error'] === UPLOAD_ERR_OK) {
            // Répertoire de destination pour les fichiers PDF
            $destination_dir = 'pdf/';

            // Chemin complet pour enregistrer le fichier
            $pdf_file_path = $destination_dir . $libelle_doc;

            // Déplacez le fichier téléchargé vers le répertoire de sauvegarde
            if (move_uploaded_file($_FILES['fichier_pdf']['tmp_name'], $pdf_file_path)) {
                // Enregistrez le nom du fichier dans la base de données
                $document->create_doc();
                echo 'enregistrement fait';
            } else {
                echo 'Erreur lors du téléchargement du fichier PDF.';
            }
        } else {
            echo 'Aucun fichier PDF n été téléchargé.';
        }
    ?>
     <input type="submit" value="Confirmer ?" id="confirmer"> 
    </form>
    <FORM action="saisie_contact.php" METHOD="POST">
        <input type="submit" value="Retour ?" id="retour"> 
    </form> 
</body>
</html>