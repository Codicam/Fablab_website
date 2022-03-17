<?php session_start();

if ((isset($_POST['email']) && !empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) &&
    (isset($_POST['password']) && !empty($_POST['password']))) {

    require_once('Models/UserModel.php');
    $hash = (new Database)->getDbInfo('utilisateurs','Password_User', "Mail_User_Utilisateurs", $_POST['email']);
    $strHash = implode('', $hash);
    $readPwd = password_verify($_POST['password'], $strHash);
    if ($readPwd) {
        $userVerify = (new UserModel)->sign_in($_POST['email'], $strHash);
        if ($userVerify) {
            require_once('Models/DatabaseModel.php');
            $loggedUser_Name = (new Database)->getDbInfo('utilisateurs','Prenom_User_Utilisateurs', "Mail_User_Utilisateurs", $_POST['email']);
            ?>
            <div >
                Bonjour <?php echo implode('', $loggedUser_Name); ?> et bienvenue, vous pouvez accéder au site.
            </div> <?php
        }
        else {
            throw new Exception("Vous n'êtes pas autorisé à accéder à cette partie du site");
        }
    }
    else {
        echo 'Mot de passe incorrect, veuillez réessayer';
    }
}
else {
    echo 'Vous n\'avez pas rempli tous les champs permettant la connexion';
}
/*
if ((isset($_POST['email']) && !empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) &&
    (isset($_POST['password']) && !empty($_POST['password']))) {

    require_once('Models/UserModel.php');
    $userVerify = (new UserModel)->sign_in($_POST['email'], $_POST['email']);
    if ($userVerify) {
        require_once('Models/DatabaseModel.php');
        $loggedUser_Name = (new Database)->getDbInfo('utilisateurs','Prenom_User_Utilisateurs', "Mail_User_Utilisateurs", $_POST['email']);
        */?><!--
        <div >
            Bonjour <?php /*echo implode('', $loggedUser_Name); */?> et bienvenue, vous pouvez accéder au site.
        </div> --><?php
/*    }
    else {
        echo 'Email ou mot de passe incorrect, veuillez réessayer';
    }
}
else {
    echo 'Vous n\'avez pas rempli tous les champs permettant la connexion';
}*/
?>
