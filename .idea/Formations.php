<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page test</title>
    <link rel="stylesheet" href="CSS/main.css"/>
    <link rel="stylesheet" href="CSS/popup.css"/>
</head>
<body>

<h2>Voici la liste des formations disponibles</h2>

    <p><?php
        echo implode('<br/>',$tableInfos);
    ?></p>

</body>
</html>
