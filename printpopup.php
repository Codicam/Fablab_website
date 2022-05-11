<?php
require_once('init/index.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href=<?php echo $GLOBALS['url_root'].'/CSS/main.css';?>/>
    <link rel="stylesheet" href=<?php echo $GLOBALS['url_root'].'/CSS/Formulaire.css';?>/>
    <link rel="stylesheet" href=<?php echo $GLOBALS['url_root'].'/CSS/popup.css';?>/>

</head>
<body>

<div class="sidebar">
    <button class="button" data-modal="modalIdSignUp">
        INSCRIPTION
    </button>
    <button class="button" data-modal="modalIdSignIn">
        CONNEXION
    </button>
</div> <!--Boutons-->

<div id="modalIdSignUp" class="modal">
    <div class="modal-content">
        <div class="contact-form">
            <form action="Controllers/signup.php" method="POST">
                <div>
                    <a class="close">&times;</a>
                </div>
                <div>
                    <h2>Inscription</h2>
                    <p><i>Remplissez tous les champs s'il vous plaît</i></p>
                    <br/>
                    <div class="input">
                        <label for="prenom" class="form-label">Nom :</label>
                        <textarea class="form-control" placeholder="Nom" id="message" name="nom"></textarea>
                    </div>
                    <div class="input">
                        <label for="nom" class="form-label">Prénom :</label>
                        <textarea class="form-control" placeholder="Prénom" id="message" name="prenom"></textarea>
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
                    <div class="input">
                        <label for="promo" class="form-label">Promotion :</label>
                        <textarea class="form-control" placeholder="Forme : OXXX, IXXX, AXXX" id="message" name="promo"></textarea>
                    </div>
                    <button type="submit" class="subbutton" formtarget="_blank">S'inscrire</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="modalIdSignIn" class="modal">
    <div class="modal-content">
        <div class="contact-form">
            <form action="Controllers/login.php" method="POST">
                <div>
                    <a class="close">&times;</a>
                </div>
                <div>
                    <h2>Connexion</h2>
                    <p><i>Remplissez tous les champs s'il vous plaît</i></p>
                    <br/>
                    <div class="form">
                        <label for="email" class="form-label">Email :</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre adresse mail Icam">
                        <div class="form-subtext">Nous ne revendrons pas votre email.</div>
                    </div>
                    <div class="input">
                        <label for="password" class="form-label">Mot de passe :</label>
                        <input type="password" class="form-control" placeholder="Entrez votre mot de passe" id="password" name="password">
                        <div class="form-subtext">Votre mot de passe est crypté automatiquement.</div>
                    </div>
                    <button type="submit" class="subbutton">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    let modalBtns = [...document.querySelectorAll(".button")];
    modalBtns.forEach(function (btn) {
        btn.onclick = function () {
            let modal = btn.getAttribute("data-modal");
            document.getElementById(modal).style.display = "block";
        };
    });
    let closeBtns = [...document.querySelectorAll(".close")];
    closeBtns.forEach(function (btn) {
        btn.onclick = function () {
            let modal = btn.closest(".modal");
            modal.style.display = "none";
        };
    });
    window.onclick = function (event) {
        if (event.target.className === "modal") {
            event.target.style.display = "none";
        }
    };
</script>

</body>
</html>

