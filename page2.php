<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page test</title>
    <link rel="stylesheet" href="CSS/main.css"/>
    <link rel="stylesheet" href="CSS/popup.css"/>
</head>
<body>

<?php
if (isset ($_SESSION['loggeduser']) && ($_SESSION['loggeduser'] === true)):?>
    <h3 style="margin: 50px auto;">Ceci est une page test, l'utilisateur doit être connecté pour la voir.</h3>
<?php else :
    require('init/Errorpage.php');
endif; ?>


</body>
</html>