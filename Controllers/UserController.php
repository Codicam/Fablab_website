<?php

require_once('../init/path.php');
require_once('../Models/DatabaseModel.php');
require_once('../Models/UserModel.php');

if (isset ($_SESSION['loggeduser']) && $_SESSION['loggeduser']) {

    $infosToPrint = array('Nom_User_Utilisateurs', 'Prenom_User_Utilisateurs', 'Promo_User_Utilisateurs', 'Mail_User_Utilisateurs', 'Password_User');
    foreach ($infosToPrint as $data) {
        $userData = (new Database)->getPreciseInfo('utilisateurs', $data, "Id_User_Utilisateurs", $_SESSION['userId']);
        $stringUserData = implode('',$userData);
        $userInfos[] = $stringUserData;
    }
    require_once($_SERVER['DOCUMENT_ROOT'].'/userProfile.php');
}
else {
    require($GLOBALS['url_root'].'/init/Errorpage.php');
}
