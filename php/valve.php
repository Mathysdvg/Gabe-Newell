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
    <title>Valve</title>
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
        <h1>Valve</h1>
    </section>

    <section class="contenu">
        <h2>À propos de Valve</h2>
        <p>Valve Corporation est une entreprise américaine de développement et d'édition de jeux vidéo, fondée en 1996
            par Gabe Newell et Mike Harrington. Elle est connue pour des franchises célèbres telles que Half-Life,
            Portal, Left 4 Dead et Counter-Strike.</p>

        <figure>
            <img src="../images/ValveLogo.jpeg" alt="Logo de Valve">
            <figcaption>Le logo de Valve Corporation.</figcaption>
        </figure>

        <h2>Jeux emblématiques</h2>
        <ul>
            <li>Half-Life (1998)</li>
            <li>Counter-Strike (2000)</li>
            <li>Portal (2007)</li>
            <li>Left 4 Dead (2008)</li>
            <li>Dota 2 (2013)</li>
        </ul>

        <h2>Impact sur l'industrie</h2>
        <p>Valve a révolutionné l'industrie du jeu vidéo en lançant Steam en 2003, une plateforme de distribution de
            jeux numériques qui est aujourd'hui la plus utilisée au monde.</p>

        <h3>Faits intéressants</h3>
        <p>Valve a créé le moteur de jeu Source, utilisé dans plusieurs de ses jeux.</p>
        <p>La communauté attend toujours avec impatience un Half-Life 3.</p>
    </section>
</body>

</html>