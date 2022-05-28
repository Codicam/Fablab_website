<?php session_start() ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/menu-deroulant.css" />
    <title> Maîtriser les imprimantes </title>
    <link rel="stylesheet" type="text/css" href="CSS/styleNav.css">
    <link rel="stylesheet" href="CSS/RubImprimantes.css" />
    <link rel="stylesheet" href="CSS/popup.css"/>
    <link rel="stylesheet" href="CSS/styleFooter.css"/>


</head>
<body>

<?php require('printNavMenu.php'); ?>

<header id="header">
        <div class="wrapper">
            <div class="headcontent">
                <h1>Maîtriser les Imprimantes</h1>
                <p style="text-shadow: 1px 1px 2px black; font-size: 24px">Formez et documentez-vous !</p>
            </div>
        </div>
</header>


<div class="separator"></div>

<div class="frame_box">
    <div class="FormationsDisp">
        <div class="titre">
            <h3 style="font-size: 24px; font-weight: bold;"> Formations disponibles </h3> <br/>
        </div>
        <div class="NometDate">
            <div class="NomForm">
                atelier projet perso
            </div>

            <div class="DateForm">
                10/09/22
            </div>

        </div>
    </div>

    <div class="Documentation">
        <h3 style="font-size: 24px; font-weight: bold;"> Documentation </h3>
    </div>

</div>

</body>
</html>
