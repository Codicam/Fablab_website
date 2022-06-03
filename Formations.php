<?php
require_once('init/path.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formations</title>
    <link rel="stylesheet" href="<?php echo $GLOBALS['url_root'].'/CSS/main.css';?>"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['url_root'].'/CSS/Formation.css';?>"/>
</head>
<body>

<?php require('printNavMenu.php'); ?>

<header class="header">
    <div class="wrapper">
        <div class="headcontent">
            <h1>FORMATIONS</h1>
            <p style="text-shadow: 1px 1px 2px black; font-size: 24px; font-family: 'Montserrat', sans-serif;">Être formé(e) et former les autres</p>
        </div>
    </div>
</header>



<div class="separator"></div>

<h2>Voici la liste des formations disponibles</h2>

<div class="separator"></div>

<div class="frame_box scrollFade">
    <div class="carrousel_box border_corner" id="imprimante3d">
        <a href="<?php echo $GLOBALS['url_root'].'/RubImprimantes.php'; ?>" class="c_title">Imprimante 3D</a>
    </div>
        <article>
            <p style="text-shadow: 1px 1px 2px black; font-size: 24px;border: 1px solid black; padding: 5px;">Imprimante 3D</p>
            <p class="textCarrousel"; style="text-align: justify;">   Si vous avez entendu déjà parler de l’impression 3D,
                vous savez forcément qu’elle fonctionne à l’aide d’une imprimante bien spécifique.
                En effet, celle-ci n’imprime pas du texte ou des images sur une feuille de papier. <br><br/>
                    A l’aide de différents matériaux, elle imprime des fines lamelles qui se superposent
                les unes aux autres pour former un tout, un objet en 3D. On sait, c’est un peu fou.
                Quel type d’objet me direz-vous ? Absolument tout ; un objet imprimé peut être un
                minuscule bijou comme un immense meuble. Mais comme pour les imprimantes classiques,
                les modèles ne sont pas les mêmes et ont leurs spécificités. </p> <br/>
        </article>


</div>


<div class="separator"></div>

<div class="frame_box scrollFade">

    <article>
        <p style="text-shadow: 1px 1px 2px black; font-size: 24px;border: 1px solid black; padding: 5px;">Electronique</p> <br/>
        <p class="textCarrousel"; style="text-align: center;">   De la voiture à la maison en passant par les loisirs ou la santé :
            tous nos espaces de vie sont en train de devenir « intelligents » grâce aux progrès de
            l’électronique. Pour cela, il est nécessaire d’avoir des techniciens aux compétences pointues.
            Quelles formations faire ? <br/><br/></p>
        <p style="font-size: 24px">On vous dit tout...</p>
    </article>
    <div class="carrousel_box border_corner" id="elec">
        <a href="" class="c_title">Electronique</a>
    </div>

</div>

<div class="separator"></div>

<div class="frame_box scrollFade">
    <div class="carrousel_box border_corner" id="bois">
        <a href="" class="c_title">Usiner du bois</a>
    </div>
    <article>
        <p style="text-shadow: 1px 1px 2px black; font-size: 24px; border: 1px solid black; padding: 5px;">Bois / Découpe laser</p>
        <p class="textCarrousel"; style="text-align: justify;">  Le travail au bois à l'ancienne, rien de mieux
        pour créer ses propres structures. Entre découpeuse laser, scie à onglet, perceuse colonne, vous avez
        le choix de l'outillage. <br> <br> Mais maintenant, comment on s'en sert ?
            Quelles sont les petites astuces du travail du bois ?</p> <br/>
    </article>


</div>

<div class="separator"></div>

<div class="frame_box scrollFade">

    <article>
        <p style="text-shadow: 1px 1px 2px black; font-size: 24px;border: 1px solid black; padding: 5px;">Autres</p> <br/>
        <p class="textCarrousel"; style="text-align: center;"> Si tu ne trouves pas ton bonheur dans les rubriques
            ci-dessus, tente la rubrique "Autres" pour peut-être trouver ce que tu recherches<br/><br/></p>
    </article>
    <div class="carrousel_box border_corner" id="autres">
        <a href="" class="c_title">Autres</a>
    </div>

</div>

<?php require('Footer.php'); ?>

<script src="<?php echo $GLOBALS['url_root'].'/JavaScript/floatable.js';?>"></script>
</body>
<script src="<?php echo $GLOBALS['url_root'].'/JavaScript/scrollfade.js';?>"></script>

</html>

