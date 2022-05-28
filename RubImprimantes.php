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
            <h3 style="font-size: 24px; font-weight: bold;"> Formations disponibles </h3>
        </div>

        <div class="NometDate" style="text-align: start">
            <div class="NomForm">
                <p style="position: relative; left: 15px; text-transform: uppercase;">
                    Atelier Projets Personnels </p> <br/>
                <p style="position: relative; left: 15px; text-transform: uppercase;">
                    Formation Théorique </p> <br/>
                <p style="position: relative; left: 15px; text-transform: uppercase;">
                    Formation Pratique </p> <br/>
            </div>

            <div class="DateForm" style="text-align: center;">
                <p style="position: relative; left: 15px; text-transform: uppercase;"> 10/09/22 </p> <br/>
                <p style="position: relative; left: 15px; text-transform: uppercase;"> 10/10/22 </p> <br/>
                <p style="position: relative; left: 15px; text-transform: uppercase;"> 11/10/22 </p> <br/>
            </div>

            <div class="BtnInscription">
                <p style="text-align: center"> <button class="button_inscription"> Je m'inscris </button> </p> <br/>
                <p style="text-align: center"> <button class="button_inscription"> Je m'inscris </button> </p> <br/>
                <p style="text-align: center"> <button class="button_inscription"> Je m'inscris </button> </p> <br/>

            </div>


        </div>
    </div>

    <div class="Documentation">
        <div class="titre">
            <h3 style="font-size: 24px; font-weight: bold;"> Documentation </h3>
        </div>

        <div class="LiensDoc">
            <p> <a class="lien" href="../Manuel_dutilisation_Zortrax_m200_plus_FR.pdf"> <img src="../images/logo_telecharger.png" alt="logo_telecharger" title="logo_telecharger"/>  Manuel d'Utilisation de l'Imprimante 3D M200 Plus </a>
            </p>
        </div>

    </div>

</div>

<div class="separator"></div>

<?php require('Footer.php'); ?>

</body>
</html>
