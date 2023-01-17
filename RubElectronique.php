<?php
require_once('init/path.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1">
    <title> Electronique </title>
    <link rel="stylesheet" href="https://fablab-icam-toulouse.com/CSS/RubElectronique.css"/>
    <link rel="stylesheet" href="https://fablab-icam-toulouse.com/CSS/RubFormation.css"/>
    <link rel="stylesheet" href="https://fablab-icam-toulouse.com/CSS/main.css"/>
</head>

<body>

<header class="header2" style="height: 50%; background-image: url('https://fablab-icam-toulouse.com/images/elec.jpg')">
    <div class="wrapper">
        <div class="headcontent">
            <h1> Electronique </h1>
            <p style="text-shadow: 1px 1px 2px black; font-size: 24px">Formez et documentez-vous !</p>
        </div>
    </div>
</header>

<?php require('printNavMenu.php'); ?>

<div class="separator"></div>

<div class="frame_box">
    <div class="FormationsDisp">
        <div class="titre">
            <h3 style="font-size: 24px; font-weight: bold; color: orange;">Formations disponibles</h3>
        </div>
    </div>
    <div class="Documentation">
        <div class="titre">
            <h3 style="font-size: 24px; font-weight: bold; color: orange">Documentation</h3>
        </div>
    </div>

</div>


<?php require('Footer.php'); ?>

</body>

</html>