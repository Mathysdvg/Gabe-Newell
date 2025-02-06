<?php
    session_start();
    $username = isset($_SESSION["pseudo"]) ? $_SESSION["pseudo"] : "";
    $isLogged = isset($_SESSION["login"]) && $_SESSION["login"] === true;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <section class="menu">
        <nav>
            <ul>
                <li><a href="accueil.php">Accueil</a></li>
                <li><a href="gabenewell.html">Gabe Newell</a></li>
                <li><a href="valve.html">Valve</a></li>
                <li><a href="steam.html">Steam</a></li>
                <li><a href="../php/connexion.php">Connexion</a></li>
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
        <h1>Accueil</h1>

        <section class="contenu">
            <h2>Bienvenue sur notre site dédié à Gabe Newell</h2>
            <section>
                <div class="partie">
                    <h2>Gabe Newell</h2>
                    <img src="../images/GabeNewell2.png" alt="Gabe Newell">
                    <p>Découvrez le parcours de Gabe Newell, cofondateur de Valve et figure emblématique du jeu vidéo.
                    </p>
                    <a href="gabenewell.html" class="btn">En savoir plus</a>
                </div>
                <div class="partie">
                    <h2>Valve</h2>
                    <img src="../images/ValveGames.jpeg" alt="Valve">
                    <p>Explorez l'histoire et les succès de Valve, l'un des studios les plus influents du gaming.</p>
                    <a href="valve.html" class="btn">Découvrir</a>
                </div>
                <div class="partie">
                    <h2>Steam</h2>
                    <img src="../images/Steam.jpg" alt="Steam">
                    <p>Apprenez comment Steam a révolutionné la distribution numérique des jeux vidéo.</p>
                    <a href="steam.html" class="btn">Voir plus</a>
                </div>
                <div class="partie">
                    <h2>Connexion</h2>
                    <p>Connectez-vous pour accéder à des contenus exclusifs</p>
                    <a href="../php/connexion.php" class="btn">Se connecter</a>
                </div>
            </section>
        </section>

</body>

</html>