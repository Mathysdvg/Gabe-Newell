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
    <title>Mon compte</title>
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
                <li><a href="connexion.php">Connexion</a></li>
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
        <h1>Mon Compte</h1>
    </section>

    <section class="contenu">
        <h2>Voici les informations de ton compte :</h2>
        <?php
            echo("<h3>Nom : $username</h3>");
        ?>
        <form action="deconnexion.php" method="post">
            <input type="submit" value="Déconnecter">
        </form>
    </section>
</body>
</html>
