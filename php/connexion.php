<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <section class="menu">
        <nav>
        <ul>
                <li><a href="accueil.php">Accueil</a></li>
                <li><a href="../html/gabenewell.html">Gabe Newell</a></li>
                <li><a href="../html/valve.html">Valve</a></li>
                <li><a href="../html/steam.html">Steam</a></li>
                <li><a href="connexion.php">Connexion</a></li>
            </ul>
            <ul class="user">
                <?php
                    if ($isLogged) {
                        echo ("<li><a href='../php/compte.php'><img src='../images/user.png' alt='user'>$username</a></li>");
                    } else {
                        echo ("<li><a href='../php/connexion.php'><img src='../images/user.png' alt='user'>Invité</a></li>");
                    }
                ?>
            </ul>
        </nav>
        <h1>Connexion</h1>
    </section>
    <section class="contenu">
        <h2>Connecte toi pour suivre les actualités du site.</h2>
        <form action="verification.php" method="post">
        <label for="pseudo">Pseudo :</label>
                <input type="text" id="pseudo" name="pseudo" required>
                <br>
                <br>
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
                <br>
                <input type="submit" value="Connexion">
        </form>
        
    </section>
</body>
</html>