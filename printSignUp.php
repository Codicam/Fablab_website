<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="../CSS/Formulairecontact.css">
    <link rel="stylesheet" href="../CSS/main.css"/>
</head>
<body>

<div>
    <div class="titre">
        <?php
        if ($userData) { ?>
            <h2><?php echo 'Bonjour ' . $_POST['prenom'] . ', votre inscription a bien été prise en compte'; ?></h2>
        <?php } else { ?>
            <h2><?php echo $_POST['prenom'] . ', vous avez déjà un compte'; ?> </h2>
            <?php
        }
        ?>
    </div>
    <div style="text-align: left; margin: 0 50px;">
        <p >
            Liste des personnes déjà inscrites :
        </p>
        <br/>
            <?php
                echo implode("<br />", $members); //change array into string
            ?>
    </div>
</div>

</body>
</html>