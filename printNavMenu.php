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
            <a href="#">Formations</a>
            <ul class="sous-menu">
                <li><a href="#">Maîtriser les imprimantes</a></li>
                <li><a href="#">Usiner du bois</a></li>
                <li><a href="#">Usiner du métal</a></li>
            </ul>
        </li>
        <li class="menu-deroulant">
            <a href="#">Outils</a>
            <ul class="sous-menu">
                <li><a href="#">Bois</a></li>
                <li><a href="#">Métaux</a></li>
                <li><a href="#">Plastique</a></li>
                <li><a href="#">Electronique</a></li>
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
            <?php include('printpopup.php'); ?>
        </div>
    </ul>
</nav>

</body>
</html>