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
    <div style="text-align: left; margin: 50px 50px; width: 30%;">
        <h3>
            <strong>Voici vos informations personnelles :</strong>
        </h3>
        <p><br />
            <i>(Les informations des champs que vous ne remplissez pas ne seront pas changées.)</i>
        </p>
        <div class="contact-form">
            <form action=<?php echo $GLOBALS['url_root'].'/Controllers/updateUserInfos.php' ?> method="POST">
                    <div class="input">
                        <label for="prenom" class="form-label">Nom :</label>
                        <input type="text" class="form-control" placeholder=<?php echo $userInfos[0]; ?> id="message" name="nom"/>
                    </div>
                    <div class="input">
                        <label for="nom" class="form-label">Prénom :</label>
                        <input type="text" class="form-control" placeholder=<?php echo $userInfos[1]; ?> id="message" name="prenom"/>
                    </div>
                    <div class="input">
                        <label for="promo" class="form-label">Promotion :</label>
                        <input type="text" class="form-control" placeholder=<?php echo $userInfos[2]; ?> id="message" name="promo"/>
                    </div>
                    <div class="form">
                        <label for="email" class="form-label">Email :</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder=<?php echo $userInfos[3]; ?>/>
                        <div class="form-subtext">Nous ne revendrons pas votre email.</div>
                    </div>
                    <div class="input">
                        <label for="password" class="form-label">Mot de passe :</label>
                        <input type="password" class="form-control" placeholder=<?php echo $userInfos[4]; ?> id="password" name="password">
                        <div class="form-subtext">Votre mot de passe est crypté automatiquement.</div>
                    </div>
                    <button type="submit" class="subbutton">Sauvegarder mes changements</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
