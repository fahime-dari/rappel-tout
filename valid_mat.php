<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Validation du matériel</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
<FORM action="resultat_mat.php" METHOD="POST">
    <?php 
    session_start();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $ref_mat=$_POST['ref_mat'];
        $lib_mat=$_POST['lib_mat']; 

        $_SESSION['ref_mat']=$_POST['ref_mat'];
        $_SESSION['lib_mat']=$_POST['lib_mat'];

        echo '<h2>Données confirmées:</h2>';
        echo 'Référence du matériel :' .$ref_mat. '</p>';
        echo 'Libellé du matériel :' .$lib_mat. '</p>';
       

    }
    ?>
     <input type="submit" value="Confirmer ?" id="confirmer"> 
    </form>
    <FORM action="saisie_contact.php" METHOD="POST">
        <input type="submit" value="Retour ?" id="retour"> 
    </form> 
</body>
</html>