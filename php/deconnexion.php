<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déconnexion</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <section class="menu">
            <h1>Déconnexion</h1>
    </section>
    <section class="contenu">
            <?php
                echo("<h2>Déconnexion réussi</h2>");   
            ?>
            <a href="accueil.php" class="btn">Revenir sur le site</a>
        </section>
</body>
</html>
