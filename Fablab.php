<?php

require_once('init/index.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=<?php echo $GLOBALS['url_root'].'/CSS/styleHome.css';?>/>
    <link rel="stylesheet" href=<?php echo $GLOBALS['url_root'].'/CSS/main.css';?>/>
    <title>Bienvenue au Fablab !</title>

</head>
<body>

<header id="hautpage">
    <div class="wrapper">
        <div class="headcontent">
            <h1>BIENVENUE AU FABLAB</h1>
            <p style="text-shadow: 1px 1px 2px black; font-size: 24px">Site Icam de Toulouse</p>
        </div>
    </div>
</header> <!--Landing screen (Title + backgroundimage)-->

<?php require('printNavMenu.php'); ?>

<div class="separator"></div>

<?php require('carrouselSites.php') ?>

<div class="separator"></div>

<div class="hiddenscrollbar">
    <div id="pagecontainer">
        <article>
            <h2>Les news de la semaine !</h2><br/><br/>
            <p id="maintexte">
                Lorem ipsum dolor sit amet. Eum sequi rerum et dolores sunt ex sapiente dolorem ut tenetur placeat ut
                aspernatur praesentium. Et velit repellat qui alias voluptatem non autem sint id fugiat inventore ad
                eius facilis.
                Et dolorem nihil aut eveniet suscipit ut molestiae ipsum? Et obcaecati quisquam et assumenda error aut
                similique eaque. Ut consequatur corrupti ab enim rerum non rerum voluptate qui tenetur recusandae! Est
                quisquam consequatur 33 tenetur galisum cum perferendis provident et exercitationem incidunt aut
                voluptate mollitia.
                Est aliquid voluptatem ad omnis magni qui dolorum maxime sed laborum accusamus et delectus tempora est
                accusamus natus non eveniet nemo. Aut laboriosam facere sed voluptatibus ullam aut molestiae officia ab
                dolor numquam qui suscipit nostrum? Ab expedita quos sed consequatur numquam non dolorem qui sunt
                repellendus id adipisci odit non perferendis fugit. Eos inventore voluptas qui vitae eligendi non
                laborum amet eos architecto fugit.
                Lorem ipsum dolor sit amet. Eum sequi rerum et dolores sunt ex sapiente dolorem ut tenetur placeat ut
                aspernatur praesentium. Et velit repellat qui alias voluptatem non autem sint id fugiat inventore ad
                eius facilis.
                Et dolorem nihil aut eveniet suscipit ut molestiae ipsum? Et obcaecati quisquam et assumenda error aut
                similique eaque. Ut consequatur corrupti ab enim rerum non rerum voluptate qui tenetur recusandae! Est
                quisquam consequatur 33 tenetur galisum cum perferendis provident et exercitationem incidunt aut
                voluptate mollitia.
                Est aliquid voluptatem ad omnis magni qui dolorum maxime sed laborum accusamus et delectus tempora est
                aLorem ipsum dolor sit amet. Eum sequi rerum et dolores sunt ex sapiente dolorem ut tenetur placeat ut
                aspernatur praesentium. Et velit repellat qui alias voluptatem non autem sint id fugiat inventore ad
                eius facilis.
                Et dolorem nihil aut eveniet suscipit ut molestiae ipsum? Et obcaecati quisquam et assumenda error aut
                similique eaque. Ut consequatur corrupti ab enim rerum non rerum voluptate qui tenetur recusandae! Est
                quisquam consequatur 33 tenetur galisum cum perferendis provident et exercitationem incidunt aut
                voluptate mollitia.
                Est aliquid voluptatem ad omnis magni qui dolorum maxime sed laborum accusamus et delectus tempora est
                aLorem ipsum dolor sit amet. Eum sequi rerum et dolores sunt ex sapiente dolorem ut tenetur placeat ut
                aspernatur praesentium. Et velit repellat qui alias voluptatem non autem sint id fugiat inventore ad
                eius facilis.
                Et dolorem nihil aut eveniet suscipit ut molestiae ipsum? Et obcaecati quisquam et assumenda error aut
                similique eaque. Ut consequatur corrupti ab enim rerum non rerum voluptate qui tenetur recusandae! Est
                quisquam consequatur 33 tenetur galisum cum perferendis provident et exercitationem incidunt aut
                voluptate mollitia.
                Est aliquid voluptatem ad omnis magni qui dolorum maxime sed laborum accusamus et delectus tempora est
                aLorem ipsum dolor sit amet. Eum sequi rerum et dolores sunt ex sapiente dolorem ut tenetur placeat ut
                aspernatur praesentium. Et velit repellat qui alias voluptatem non autem sint id fugiat inventore ad
                eius facilis.
                Et dolorem nihil aut eveniet suscipit ut molestiae ipsum? Et obcaecati quisquam et assumenda error aut
                similique eaque. Ut consequatur corrupti ab enim rerum non rerum voluptate qui tenetur recusandae! Est
                quisquam consequatur 33 tenetur galisum cum perferendis provident et exercitationem incidunt aut
                voluptate mollitia.
                Est aliquid voluptatem ad omnis magni qui dolorum maxime sed laborum accusamus et delectus tempora est
                aLorem ipsum dolor sit amet. Eum sequi rerum et dolores sunt ex sapiente dolorem ut tenetur placeat ut
                aspernatur praesentium. Et velit repellat qui alias voluptatem non autem sint id fugiat inventore ad
                eius facilis.
                Et dolorem nihil aut eolorum maxime sed laborum accusamus et delectus tempora est aLorem ipsum dolor sit
                amet. Eum sequi rerum et dolores sunt ex sapiente dolorem ut tenetur placeat ut aspernatur praesentium.
                Et velit repellat qui alias voluptatem non autem sint id fugiat inventore ad eius facilis.
            </p> <! Texte de remplissage ici>
        </article>
    </div>
</div>

<?php require('Footer.php'); ?>

</body>
</html>
