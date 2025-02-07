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
    <title>Gabe Newell</title>
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
        <h1>Gabe Newell</h1>
    </section>

    <section class="contenu">
        <article>
            <figure>
                <img src="../images/GabeNewell.jpg" alt="Gabe Newell">
                <figcaption>Gabe Newell, cofondateur de Valve</figcaption>
            </figure>
            <h2>Biographie</h2>
            <p>
                Gabe Newell est un entrepreneur américain né le 3 novembre 1962. Il est le cofondateur et président de
                Valve Corporation, l'une des entreprises les plus influentes du jeu vidéo. Avant de créer Valve, Newell
                a travaillé chez Microsoft où il a contribué au développement de Windows.
            </p>
            <p>
                En 1996, avec Mike Harrington, il quitte Microsoft pour fonder Valve. L'année suivante, ils lancent le
                jeu <strong>Half-Life</strong>, qui révolutionne le jeu de tir à la première personne. Par la suite,
                Valve a continué à innover avec des titres comme <strong>Counter-Strike</strong>,
                <strong>Team Fortress</strong> et <strong>Portal</strong>.
            </p>
            <p>
                En 2003, Valve a lancé <strong>Steam</strong>, une plateforme de distribution numérique qui est devenue
                le leader du marché, transformant la manière dont les joueurs achètent et jouent à leurs jeux.
            </p>

            <p>
                Aujourd'hui, Gabe Newell est considéré comme une figure emblématique du jeu vidéo, et son travail a eu
                un impact durable sur l'industrie.
            </p>
        </article>

        <h3>Faits intéressants</h3>
        <ul>
            <li>Gabe Newell est un grand fan de science-fiction et de fantasy.</li>
            <li>Il a travaillé chez Microsoft pendant 13 ans avant de fonder Valve.</li>
            <li>Il possède une collection impressionnante d'armes médiévales.</li>
        </ul>
    </section>
</body>

</html>