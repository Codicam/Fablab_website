<?php
require_once('init/path.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1">
    <title> Maîtriser les imprimantes </title>
    <link rel="stylesheet" href="<?php echo $GLOBALS['url_root'].'/CSS/RubImprimantes.css';?>"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['url_root'].'/CSS/RubFormation.css';?>"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['url_root'].'/CSS/main.css';?>"/>
</head>

<body>

<header class="header1">
    <div class="wrapper">
        <div class="headcontent">
            <h1>Maîtriser les Imprimantes</h1>
            <p style="text-shadow: 1px 1px 2px black; font-size: 24px">Formez et documentez-vous !</p>
        </div>
    </div>
</header>

<?php require('printNavMenu.php'); ?>

<div class="separator"></div>

<div class="frame_box">
    <div class="FormationsDisp">
        <div class="titre">
            <h3 style="font-size: 24px; font-weight: bold;"> Formations disponibles </h3>
        </div>
        <div class="titre2">
            <div class="TitreNomForm">
                <h4 style="position: relative; left: 15px;">Nom</h4>
            </div>
            <div class="TitreDateForm">
                <h4 style="position: relative; left: 15px;">Date</h4>
            </div>
        </div>

        <div class="NometDate" style="text-align: start">
            <div class="NomForm">
                <a class="lien" href="#Description1" style="position: relative; left: 15px; text-transform: uppercase;"> Atelier Projets Personnels </a>

                <div id="Description1" class="modal">
                    <div class="modal-content">
                        <h5>Description de la formation</h5> <br/>
                        <p style="text-align: justify">Lors de cette formation, vous pourrez commencer ou poursuivre vos projets personnels. Tout cela encadré par un ou plusieurs membres du FabLab qui sera à votre écoute si vous avez des interrogations.
                        </p>

                        <a href="#" class="close">&times;</a>
                    </div>
                </div>
                <br/>
                <br/>
                <a class="lien" href="#Description2" style="position: relative; left: 15px; text-transform: uppercase;"> Formation Théorique </a>

                <div id="Description2" class="modal">
                    <div class="modal-content">
                        <h5>Description de la formation</h5> <br/>
                        <p style="text-align: justify"> Lors de cette formation, vous apprendrez les bases de l'utilisation des Imprimantes 3D du FabLab. Vous pourrez retrouver les toutes informations, dans la documentation disponibles en téléchargement sur notre site.
                        </p>
                        <a href="#" class="close">&times;</a>

                    </div>
                </div>
                <br/>
                <br/>
                <a class="lien" href="#Description3" style="position: relative; left: 15px; text-transform: uppercase;"> Formation Pratique </a>
                <div id="Description3" class="modal">
                    <div class="modal-content">
                        <h5>Description de la formation</h5> <br/>
                        <p style="text-align: justify">Lors de cette formation, vous pourrez mettre en pratique toutes les connaissances acquises lors de la formation théorique. Si vous avez des pièces à imprimer en particulier, n'hésitez pas à venir avec les fichiers STL, nous pourrons calibrer l'impression ensemble.
                        </p>
                        <a href="#" class="close">&times;</a>
                    </div>
                </div>

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
        <div class="titre2"></div>
        <div class="LiensDoc">
            <p> <a class="lien" href="/Manuel_dutilisation_Zortrax_m200_plus_FR.pdf"> <img src="<?php echo $GLOBALS['url_root'].'/images/logo_telechargement.png';?>" alt="logo_telecharger" title="logo_telecharger"/>  Manuel d'Utilisation de l'Imprimante 3D M200 Plus </a>
            </p>
        </div>
    </div>

</div>

<?php require('Footer.php'); ?>

</body>
</html>