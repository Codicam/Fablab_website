<?php session_start();

if (isset($_POST['email'], $_POST['password']) && !empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && !empty($_POST['password'])) {

    require_once('../Models/UserModel.php');
    require_once('../Models/DatabaseModel.php');

    if ( (new UserModel)->sign_in($_POST['email'], $_POST['password']) ) { //Check matching email and password
        $loggedUserName = (new Database)->getDbInfo('utilisateurs','Prenom_User_Utilisateurs', "Mail_User_Utilisateurs", $_POST['email']);
        ?>
        <div >
            Bonjour <?php echo implode('', $loggedUserName); ?> et bienvenue, vous pouvez accéder au site.
        </div> <?php
    }
    else {
        echo 'Email ou mot de passe incorrect, veuillez réessayer';
}
    }
else {
    echo 'Vous n\'avez pas rempli tous les champs permettant la connexion';
}
?>
