<?php session_start();

if (isset ($_SESSION['loggeduser']) || ($_SESSION['loggeduser'] === true)) {
    require_once('Models/DatabaseModel.php');
    $infos = (new Database)->getAllDbInfos('outils','Nom_Outil_Outils','Description_outil_Outils');
}
else {
    require('init/Errorpage.php');
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Outils</title>
    <link rel="stylesheet" href="CSS/Formulaire.css">
    <link rel="stylesheet" href="CSS/main.css"/>
</head>
<body>

<div>
    <div class="titre">
        <h2>Voici les outils disponibles</h2>
    </div>
    <div>
        <p> <?php echo implode('',$infos); ?></p>
    </div>
</div>

</body>
</html>
