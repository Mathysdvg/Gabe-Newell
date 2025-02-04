<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <section class="menu">
        <nav>
        <ul>
                <li><a href="../html/accueil.html">Accueil</a></li>
                <li><a href="../html/gabenewell.html">Gabe Newell</a></li>
                <li><a href="../html/valve.html">Valve</a></li>
                <li><a href="../html/steam.html">Steam</a></li>
                <li><a href="../php/connection.php">Connection</a></li>
            </ul>
        </nav>
        <h1>S'inscrire</h1>
    </section>
    <section class="contenu">
    <form action="" method="post">
                <label for="pseudo">Pseudo :</label>
                <input type="text" id="pseudo" name="pseudo" required>
                <br>
                <label for="email">Email :</label>
                <input type="mail" id="email" name="email" required>
                <br>
                <label for="password">Mot de passe :</label>
                <input type="text" id="password" name="password" required>
                <br>
                <input type="submit" value="S'inscrire">
        </form>
    </section>
</body>
</html>