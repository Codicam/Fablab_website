<?php
require_once('init/path.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Footer</title>
    <link rel="stylesheet" href=<?php echo $GLOBALS['url_root'].'/CSS/main.css';?>/>
    <link rel="stylesheet" href=<?php echo $GLOBALS['url_root'].'/CSS/styleFooter.css';?>/>
    <link rel="stylesheet" href=<?php echo $GLOBALS['url_root'].'/CSS/popup.css';?>/>
    <link rel="stylesheet" href=<?php echo $GLOBALS['url_root'].'/CSS/Formulaire.css';?>>
</head>
<body>

<footer>
    <div id="footer">
        <div id="contact">
            <h4>Retrouvez nous !</h4><br />
            <div class="btnfoot" >
                <a href="https://www.instagram.com/fabricam.toulouse/?hl=fr" class="linkfoot" target="_blank">
                    <img src="<?php echo $GLOBALS['url_root'].'/images/instagram.png';?>" alt="instagram" class="icone">
                    <p>Instagram</p>
                </a>
            </div>
            <div class="btnfoot">
                <a href="page2.php" class="linkfoot" target="_blank">
                    <img src="<?php echo $GLOBALS['url_root'].'/images/facebook.png';?>" alt="facebook" class="icone">
                    <p>Facebook</p>
                </a>
            </div>
            <div class="btnfoot">
                <a href="Formulairecontact.php" class="linkfoot" target="_blank">
                    <img src="<?php echo $GLOBALS['url_root'].'/images/Mail.png';?>" alt="Email" class="icone">
                    <p>Mail</p>
                </a>
            </div>
        </div>
        <div id="adress">
            <h4>Adresse</h4><br />
            <p>
                75 Avenue de Grande Bretagne,<br /> 31300 Toulouse, France
            </p>
            <div id="map">
                <a href="https://www.google.fr/maps/place/75+Av.+de+Grande+Bretagne,+31300+Toulouse/@43.5984635,1.4130863,17z/" target="_blank">
                    <img src="<?php echo $GLOBALS['url_root'].'/images/icamcarte.png';?>" class="carte" alt="Adresse de l'icam" />
                </a>
            </div>
        </div>
        <div id="docs">
            <h4>Documents utiles</h4><br />
            <div class="btnfoot">
                <a href="blocnote.txt" class="linkfoot">Blocnote</a>
            </div>
            <div class="btnfoot">
                <a href="blocnote.txt" class="linkfoot">Icampourlesnuls</a>
            </div>
            <div style="margin: auto;">
                <a class="button" data-modal="modalDisconnect" href="Controllers/logout.php">
                    SE DECONNECTER
                </a>
            </div>
        </div>
        <div id="logocodicam">
            <img src="<?php echo $GLOBALS['url_root'].'/images/Logocodicam.png';?>" alt="Made by Cod'icam, Logo Cod'icam" width="100px">
        </div>
    </div>
</footer>

<div id="modalDisconnect" class="modal">
    <div class="modal-content">
        <div class="box">
            <div>
                <a class="close">&times;</a>
            </div>
            <h3>Vous avez été déconnecté !</h3>
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