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
        <p> <?= implode('<br/>',$tableInfos) ?></p>
    </div>
</div>

</body>
</html>
