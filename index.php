<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySoNet.Online</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header">
        <?php if (isset($_SESSION['pseudo'])) {echo $_SESSION['pseudo'].' - ';} ?>MySoNet.Online
    </div>
    <div class="content">
        <div><a href="inscription.php">S'inscrire</a></div>
        <div><a href="rechercher.php">Rechercher un ami</a></div>
    </div>
    <div class="container">
        <h2>Avant de s'inscrire</h2>
        <p>Il vous faut un serveur privé avec MySoNet d'installé.</p>
        <p>Téléchargez le fichier d'installation dans votre répertoire courant de votre serveur puis faites: sudo ./install-mysonet.sh</p>
        <p>Ceci fonctionne uniquement sur Debian 11 et Raspberry Pi OS !</p>
        <div class="content">
            <div><a href="install-mysonet.sh">Télécharger</a></div>
        </div>
    </div>
</body>
</html>