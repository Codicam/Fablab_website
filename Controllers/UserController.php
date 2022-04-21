<?php session_start();

require_once('../Models/DatabaseModel.php');
require_once('../Models/UserModel.php');

if ($_SESSION['loggeduser']) {

    $infosToPrint = array('Nom_User_Utilisateurs', 'Prenom_User_Utilisateurs', 'Promo_User_Utilisateurs', 'Mail_User_Utilisateurs', 'Password_User');
    foreach ($infosToPrint as $data) {
        $userData = (new Database)->getPreciseInfo('utilisateurs', $data, "Id_User_Utilisateurs", $_SESSION['userId']);
        $stringUserData = implode('',$userData);
        $userInfos[] = $stringUserData;
    }
    require('../userProfile.php');
}
else {
    require('../init/Errorpage.php');
}
