<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
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
                echo("<h2>Bravo $username, tu es connecté</h2>");   
            ?>
            <img src="../images/Tf2Nice.png" alt="Connecter">
            <a href="../html/accueil.html" class="btn">Revenir sur le site</a>
        </section>
</body>
</html>

