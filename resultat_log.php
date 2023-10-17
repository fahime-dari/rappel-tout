<?php

    if (isset($_POST['username']) && (isset($_POST['password'])))
    {
        $_SESSION['username']=$_POST['username'];
        $_SESSION['password']=$_POST['password'];
        $db=new PDO('mysql:host=localhost;dbname=rappel_tout',$_SESSION['username'],$_SESSION['password']);
       $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       header('Location: http://localhost/code/index.php');
    }
    else
    {
        echo "Erreur :";
    }
    

?>