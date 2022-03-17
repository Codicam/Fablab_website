<?php session_start() ?>

<?php

if ((!isset($_GET['email']) || !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL) || empty($_GET['email']) ) ||
    (!isset($_GET['message']) || empty($_GET['message'])))
{
    echo('Il faut un email et un message valides pour soumettre le formulaire.');// Arrête l'exécution de PHP
    return;
}
if (isset($_FILES['screenshot']) AND $_FILES['screenshot']['error'] == 0) {

    if ($_FILES['screenshot']['size'] <= 8000000) {

        $fileInfo = pathinfo($_FILES['screenshot']['name']);
        $extension = $fileInfo['extension'];
        $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];         // Testes si l'extension est autorisée
        if (in_array($extension, $allowedExtensions)) {
            move_uploaded_file($_FILES['screenshot']['tmp_name'], 'Uploads/' . basename($_FILES['screenshot']['name']));
            echo "L'envoi a bien été effectué !";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Contact</title>
    <link
        href="CSS/Formulairecontact.css"
        rel="stylesheet"
    >
    <link rel="stylesheet" href="CSS/main.css"/>
</head>
<body>
<div>
    <div class="titre">
        <h2>Votre demande a bien été prise en compte !</h2>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Rappel de vos informations</h5>
            <p class="card-text"><b>Email</b> : <?php echo $_GET['email']; ?></p>
            <p class="card-text"><b>Message</b> : <?php echo strip_tags($_GET['message']); ?></p>
        </div>
    </div>
</div>

</body>
</html>