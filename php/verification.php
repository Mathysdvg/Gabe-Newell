<?php
    session_start();
    $_SESSION["pseudo"] = $_POST["pseudo"];
    $username = $_SESSION["pseudo"];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <section class="menu">
            <h1>Vérification</h1>
    </section>
    <section class="contenu">
            <?php
                echo("<h2>Bienvenu à toi $username</h2>");   
            ?>
            <img src="../images/Tf2Nice.png" alt="Connecter">
            <a href="accueil.php" class="btn">Revenir sur le site</a>
        </section>
</body>
</html>

