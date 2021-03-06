<?php
require_once('init/path.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1">
    <title>menu déroulant</title>
    <link rel="stylesheet" href="<?php echo $GLOBALS['url_root'].'/CSS/styleNav.css';?>"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['url_root'].'/CSS/main.css';?>"/>

</head>
<body>
<nav>
    <ul>
        <li class="bouton">
            <a href="<?php echo $GLOBALS['url_root'].'/Fablab.php'; ?>">Accueil</a>
        </li>
        <li class="menu-deroulant">
            <a href="<?php echo $GLOBALS['url_root'].'/Formations.php'; ?>">Formations</a>
            <ul class="sous-menu">
                <li><a href="<?php echo $GLOBALS['url_root'].'/Formations.php'; ?>">Electronique</a></li>
                <li><a href="<?php echo $GLOBALS['url_root'].'/Controllers/formationController.php'; ?>">Maîtriser les imprimantes</a></li>
                <li><a href="<?php echo $GLOBALS['url_root'].'/Formations.php'; ?>">Usiner du bois</a></li>
                <li><a href="<?php echo $GLOBALS['url_root'].'/Formations.php'; ?>">Usiner du métal</a></li>
            </ul>
        </li>
        <li class="menu-deroulant">
            <a href="<?php echo $GLOBALS['url_root'].'/Controllers/toolController.php'; ?>">Outils</a>
            <ul class="sous-menu">
                <li><a href="<?php echo $GLOBALS['url_root'].'/Controllers/toolController.php'; ?>">Bois</a></li>
                <li><a href="<?php echo $GLOBALS['url_root'].'/Controllers/toolController.php'; ?>">Electronique</a></li>
                <li><a href="<?php echo $GLOBALS['url_root'].'/Controllers/toolController.php'; ?>">Métaux</a></li>
                <li><a href="<?php echo $GLOBALS['url_root'].'/Controllers/toolController.php'; ?>">Plastique</a></li>
            </ul>
        </li>
        <li class="menu-deroulant">
            <a href="#">Machines</a>
            <ul class="sous-menu">
                <li><a href="#">Imprimantes 3D</a></li>
                <li><a href="#">Découpeuse Laser</a></li>
                <li><a href="#">Tour CNC</a></li>
                <li><a href="#">Perceuses et Fraiseuses</a></li>
                <li><a href="#">Scies</a></li>
            </ul>
        </li>

        <div class="logbtns">
            <?php
            if (isset($_SESSION['loggeduser'])) {?>
                <a class="button" href="<?php echo $GLOBALS['url_root'].'/Controllers/UserController.php'; ?>">Mon Compte</a>
            <?php }
            else {
                include('printpopup.php');
            }
            ?>
        </div>
    </ul>
</nav>

</body>
</html>