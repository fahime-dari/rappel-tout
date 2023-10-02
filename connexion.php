<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <?php 
        $username="fahime";
        $psswd="caribou";

        try 
        {
          
        $dbco=new PDO('mysql:host=localhost;dbname=rappel_tout',$username,$psswd);
            

        }
        catch (PDOexception $e)
        {
            echo "Erreur :".$e->getMessage();
        }
    
    
    ?>
</body>
</html>                 