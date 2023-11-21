<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation du MATERIEL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<FORM action="resultat.php" METHOD="POST">
    <?php 
    session_start();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $ref_mat=$_POST['ref_mat'];
        $lib_mat=$_POST['lib_mat'];
        $date_doc=$_POST['date_doc'];
        $date_exp=$_POST['date_exp'];

        $_SESSION['ref_mat']=$_POST['ref_mat'];
        $_SESSION['lib_mat']=$_POST['lib_mat'];
        $_SESSION['date_doc']=$_POST['date_doc'];
        $_SESSION['date_exp']=$_POST['date_exp'];

        echo '<h2>Données confirmées:</h2>';
        echo 'Référence du matériel :' .$ref_mat. '</p>';
        echo 'Libéllé du matériel :' .$lib_mat. '</p>';
        echo 'Date de création :' .$date_doc. '</p>';
        echo 'Date expiration :' .$date_exp. '</p>';
    

    }
    ?>
     <input type="submit" value="Confirmer ?" id="confirmer"> 
    </form>
    <FORM action="saisie_contact.php" METHOD="POST">
        <input type="submit" value="retour ?" id="retour"> 
    </form> 
</body>
</html>