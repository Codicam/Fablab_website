<?php session_start();

if ((isset($_POST['email']) && !empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) && (isset($_POST['password']) && !empty($_POST['password']))) {

    require_once('Models/UserModel.php');
    $hash = (new Database)->getDbInfo('utilisateurs','Password_User', "Mail_User_Utilisateurs", $_POST['email']);
    $stringHash = implode('', $hash);
    $decryptedPassword = password_verify($_POST['password'], $stringHash);
    if ($decryptedPassword) {
        $userVerify = (new UserModel)->sign_in($_POST['email'], $stringHash);
        if ($userVerify) {
            require_once('Models/DatabaseModel.php');
            $loggedUserName = (new Database)->getDbInfo('utilisateurs','Prenom_User_Utilisateurs', "Mail_User_Utilisateurs", $_POST['email']);
            ?>
            <div >
                Bonjour <?php echo implode('', $loggedUserName); ?> et bienvenue, vous pouvez accéder au site.
            </div> <?php
        }
        else {
            echo 'Acces refusé, veuillez réessayer';
        }
    }
    else {
        echo 'Mot de passe incorrect, veuillez réessayer';
    }

}
else {
    echo 'Vous n\'avez pas rempli tous les champs permettant la connexion';
}
?>
