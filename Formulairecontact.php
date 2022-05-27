<?php
require_once('init/path.php');
?>

<!-- Formulairecontact.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Contact</title>
    <link
    href="CSS/Formulaire.css"
    rel="stylesheet">
    <link rel="stylesheet" href=<?php echo $GLOBALS['url_root'].'/CSS/main.css';?>/>
</head>

<body>
    <div>
        <div class="titre">
            <h2>Contactez nous !</h2>
        </div>
    </div>

<div class="form">
    <form action="retourcontact.php" method="GET" enctype="multipart/form-data">
    <div class="input">
        <label for="email" class="form-label">Entrez votre email :</label>
        <input type="email" class="form-control" id="email" name="email" >
        <div id="email-help" class="form-text">Nous ne revendrons pas votre email.</div>
    </div>
    <div class="input">
        <label for="message" class="form-label">Votre message :</label>
        <textarea class="form-control2" placeholder="Exprimez vous" id="message" name="message"></textarea>
    </div>
    <div class="input">
        <label for="screenshot" class="form-label">Si vous avez rencontré un bug, merci de joindre une capture d'écran :</label>
        <input type="file" class="form-control" id="screenshot" name="screenshot" />
    </div>
    <button type="submit" class="navbutton">Envoyer</button>
    </form>
    <br />
</div>
</body>
</html>

