<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>CONNEXION</title>
</head>
<body>
<main>  
    <form action="resultat_log.php" method="POST">
        <h1>Page de CONNEXION</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="password">Mot de passe:</label>
            <input type="password" name="password">
        </div>
        <section>
            <center>
                <button type="submit">Se connecter</button>
            </center>
        </section>
    </form>
</main>
</body>
</html>