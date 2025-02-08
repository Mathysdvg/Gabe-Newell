<?php
    session_start();
    if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
        header("Location: connexion.php");
        exit();
    }
    $username = isset($_SESSION["pseudo"]) ? $_SESSION["pseudo"] : "";
    $isLogged = isset($_SESSION["login"]) && $_SESSION["login"] === true;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steam</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <section class="menu">
        <nav>
            <ul>
                <li><a href="accueil.php">Accueil</a></li>
                <li><a href="gabenewell.php">Gabe Newell</a></li>
                <li><a href="valve.php">Valve</a></li>
                <li><a href="steam.php">Steam</a></li>
            </ul>
            
            <ul class="user">
                <?php
                    if ($isLogged) {
                        echo ("<li><a href='compte.php'><img src='../images/user.png' alt='user'>$username</a></li>");
                    } else {
                        echo ("<li><a href='connexion.php'><img src='../images/user.png' alt='user'>Invité</a></li>");
                    }
                ?>
            </ul>
        </nav>
        <h1>Steam</h1>
    </section>

    <section class="contenu">
        <h2>Qu'est-ce que Steam ?</h2>
        <p>Steam est une plateforme de distribution de jeux vidéo en ligne développée par Valve Corporation. Lancée en
            2003, elle permet aux joueurs d'acheter, de télécharger et de jouer à des jeux, ainsi que d'interagir avec
            une grande communauté de joueurs.</p>

        <figure>
            <img src="../images/SteamLogo.png" alt="Logo de Steam">
            <figcaption>Le logo emblématique de Steam.</figcaption>
        </figure>

        <h2>Fonctionnalités principales</h2>
        <ul>
            <li>Une immense bibliothèque de jeux de tous genres.</li>
            <li>Des soldes régulières avec des remises importantes.</li>
            <li>Un système de communauté avec des amis, discussions et succès.</li>
            <li>Steam Workshop pour les mods et le contenu créé par les joueurs.</li>
            <li>Le Steam Cloud pour synchroniser les sauvegardes de jeux.</li>
        </ul>

        <h2>Histoire de Steam</h2>
        <p>Steam a été lancé en 2003 pour permettre aux joueurs de mettre à jour facilement leurs jeux. Avec le temps,
            il est devenu une véritable place de marché pour les jeux vidéo, attirant des millions d'utilisateurs et
            devenant un acteur incontournable du marché.</p>

        <h3>Faits intéressants</h3>
        <p>Steam a dépassé les 120 millions d'utilisateurs actifs mensuels en 2021.</p>
        <p>Les soldes Steam sont parmi les événements les plus attendus par les joueurs du monde entier.</p>
    </section>
</body>

</html>