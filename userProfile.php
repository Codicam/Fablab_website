<?php
require_once('init/index.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Compte</title>
    <link rel="stylesheet" href=<?php echo $GLOBALS['url_root'].'/CSS/main.css';?>/>
    <link rel="stylesheet" href=<?php echo $GLOBALS['url_root'].'/CSS/Formulaire.css';?>>
    <link rel="stylesheet" href=<?php echo $GLOBALS['url_root'].'/CSS/popup.css';?>/>
</head>
<body>

<div>
    <div style="text-align: left; margin: 50px 50px;">
        <h3>
            Voici vos informations personnelles :
        </h3>
        <div class="contact-form">
            <form action="Controllers/updateUserInfos.php" method="POST">
                    <br/>
                    <div class="input">
                        <label for="prenom" class="form-label">Nom :</label>
                        <textarea class="form-control" placeholder="Nom" id="message" name="nom"></textarea>
                    </div>
                    <div class="input">
                        <label for="nom" class="form-label">Prénom :</label>
                        <textarea class="form-control" placeholder="Prénom" id="message" name="prenom"></textarea>
                    </div>
                    <div class="input">
                        <label for="promo" class="form-label">Promotion :</label>
                        <textarea class="form-control" placeholder="Forme : OXXX, IXXX, AXXX" id="message" name="promo"></textarea>
                    </div>
                    <div class="form">
                        <label for="email" class="form-label">Email :</label>
                        <input type="email" class="form-control" id="email" name="email"
                               placeholder="Entrez votre adresse mail Icam">
                        <div class="form-subtext">Nous ne revendrons pas votre email.</div>
                    </div>
                    <div class="input">
                        <label for="password" class="form-label">Mot de passe :</label>
                        <input type="password" class="form-control" placeholder="Entrez votre mot de passe" id="password"
                               name="password">
                        <div class="form-subtext">Votre mot de passe est crypté automatiquement.</div>
                    </div>

                    <button type="submit" class="subbutton" formtarget="_blank">Sauvegarder mes changements</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
