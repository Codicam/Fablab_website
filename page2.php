<?php session_start();
?>

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

if (isset ($_SESSION['loggeduser']) && ($_SESSION['loggeduser'] === true)): ?>
    <p>Ceci est une page test, l'utilisateur doit être connecté pour la voir.</p>

<?php
else: {
    require('Errorpage.php');
}

endif; ?>


</body>
</html>