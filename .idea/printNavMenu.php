<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1">
    <title>menu déroulant</title>
    <link rel="stylesheet" type="text/css" href="CSS/styleNav.css">
    <link rel="stylesheet" href="CSS/main.css">

</head>
<body>

<nav>
    <ul>
        <li class="menu-deroulant">
            <a href="Controllers/formationController.php">Formations</a>
            <ul class="sous-menu">
                <li><a href="Controllers/formationController.php">Maîtriser les imprimantes</a></li>
                <li><a href="Controllers/formationController.php">Usiner du bois</a></li>
                <li><a href="Controllers/formationController.php">Usiner du métal</a></li>
            </ul>
        </li>
        <li class="menu-deroulant">
            <a href="Controllers/toolController.php">Outils</a>
            <ul class="sous-menu">
                <li><a href="Controllers/toolController.php">Bois</a></li>
                <li><a href="Controllers/toolController.php">Métaux</a></li>
                <li><a href="Controllers/toolController.php">Plastique</a></li>
                <li><a href="Controllers/toolController.php">Electronique</a></li>
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
        <li class="bouton">
            <a href="Controllers/atelierController.php">Ateliers</a>
        </li>
        <div class="logbtns">
            <?php
                if (isset($_SESSION['loggeduser']) && ($_SESSION['loggeduser'] === true)) {
                    include('printpopup.php');
                }
                else {
                    include('printpopup.php');
                }
            ?>
        </div>
    </ul>
</nav>

</body>
</html>