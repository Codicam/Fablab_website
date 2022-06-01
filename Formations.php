<?php
require_once('init/path.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formations</title>
    <link rel="stylesheet" href=<?php echo $GLOBALS['url_root'].'/CSS/main.css';?>/>
    <link rel="stylesheet" href=<?php echo $GLOBALS['url_root'].'/CSS/Formation.css';?>/>
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
        <a href="" class="c_title">Imprimante 3D</a>
    </div>
        <article>
            <p> lol </p>
            <p class="textCarrousel"> Est aliquid voluptatem ad omnis magni qui dolorum maxime sed laborum accusamus et delectus tempora est
                accusamus natus non eveniet nemo. Aut laboriosam facere sed voluptatibus ullam aut molestiae officia ab
                dolor numquam qui suscipit nostrum? Ab expedita quos sed consequatur numquam non dolorem qui sunt
                repellendus id adipisci odit non perferendis fugit. Eos inventore voluptas qui vitae eligendi non
                laborum amet eos architecto fugit.
                Lorem ipsum dolor sit amet. Eum sequi reru </p> <br/>
        </article>


</div>


<div class="separator"></div>

<div class="frame_box scrollFade">

    <div class="carrousel_box">
        <p class="textCarrousel"> Est aliquid voluptatem ad omnis magni qui dolorum maxime sed laborum accusamus et delectus tempora est
            accusamus natus non eveniet nemo. Aut laboriosam facere sed voluptatibus ullam aut molestiae officia ab
            dolor numquam qui suscipit nostrum? Ab expedita quos sed consequatur numquam non dolorem qui sunt
            repellendus id adipisci odit non perferendis fugit. Eos inventore voluptas qui vitae eligendi non
            laborum amet eos architecto fugit.
            Lorem ipsum dolor sit amet. Eum sequi reru </p>
    </div>
    <div class="carrousel_box border_corner" id="elec">
        <a href="" class="c_title">Electronique</a>
    </div>

</div>

<div class="separator"></div>

<div class="frame_box scrollFade">
    <div class="carrousel_box border_corner" id="bois">
        <a href="" class="c_title">Usiner du bois</a>
    </div>
    <div class="carrousel_box">
        <p class="textCarrousel"> Est aliquid voluptatem ad omnis magni qui dolorum maxime sed laborum accusamus et delectus tempora est
            accusamus natus non eveniet nemo. Aut laboriosam facere sed voluptatibus ullam aut molestiae officia ab
            dolor numquam qui suscipit nostrum? Ab expedita quos sed consequatur numquam non dolorem qui sunt
            repellendus id adipisci odit non perferendis fugit. Eos inventore voluptas qui vitae eligendi non
            laborum amet eos architecto fugit.
            Lorem ipsum dolor sit amet. Eum sequi reru </p>
    </div>


</div>

<div class="separator"></div>

<div class="frame_box scrollFade">

    <div class="carrousel_box">
        <div class="frame_box">
        <p class="textCarrousel"> Test</p>
        <p class="textCarrousel"> Est aliquid voluptatem ad omnis magni qui dolorum maxime sed laborum accusamus et delectus tempora est
            accusamus natus non eveniet nemo. Aut laboriosam facere sed voluptatibus ullam aut molestiae officia ab
            dolor numquam qui suscipit nostrum? Ab expedita quos sed consequatur numquam non dolorem qui sunt
            repellendus id adipisci odit non perferendis fugit. Eos inventore voluptas qui vitae eligendi non
            laborum amet eos architecto fugit.
            Lorem ipsum dolor sit amet. Eum sequi reru </p>
    </div>
    </div>
    <div class="carrousel_box border_corner" id="elec">
        <a href="" class="c_title">Electronique</a>
    </div>

</div>

<?php require('Footer.php'); ?>

<script src="<?php echo $GLOBALS['url_root'].'/JavaScript/floatable.js';?>"></script>
</body>
<script src="<?php echo $GLOBALS['url_root'].'/JavaScript/scrollfade.js';?>"></script>

</html>

