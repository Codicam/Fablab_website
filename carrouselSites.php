<?php
require_once('init/path.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo $GLOBALS['url_root'].'/CSS/main.css';?>"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['url_root'].'/CSS/styleCarrousel.css';?>"/>
    <title>carrousel des assos</title>
</head>
<body>

<h2 style="text-shadow: 1px 1px 4px black;">Les Assoc' du Fablab</h2><br /><br />

<div class="frame_box">
    <div class="carrousel_box" id="fabricam">
        <a href="" class="c_title">Fabricam</a>
    </div>
    <div class="carrousel_box" id="codicam">
        <a href="" class="c_title">Codicam</a>
    </div>
    <div class="carrousel_box" id="couturicam">
        <a href="" class="c_title">Styl'icam</a>
    </div>
    <div class="carrousel_box" id="roboticam">
        <a href="" class="c_title">Roboticam</a>
    </div>
</div>



</body>
</html>