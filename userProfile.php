<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="../CSS/main.css"/>
</head>
<body>

<div>
    <div style="text-align: left; margin: 0 50px;">
        <p >
            Voici vos informations personnelles :
        </p>
        <br/>
        <?php echo implode("<br />", $userInfos); ?>
    </div>
</div>

</body>
</html>
