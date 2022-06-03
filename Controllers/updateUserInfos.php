<?php

require_once('/home/codicam/www/Site_Fablab/init/path.php');
require_once($GLOBALS['server_root'].'/Models/DatabaseModel.php');
require_once($GLOBALS['server_root'].'/Models/UserModel.php');

$columns = array('Nom_User_Utilisateurs', 'Prenom_User_Utilisateurs', 'Promo_User_Utilisateurs', 'Mail_User_Utilisateurs', 'Password_User');
foreach ($columns as $col) {
    if (isset($_POST[$col]) && !empty($_POST[$col])) {
        if ($col === 'Password_User' ) {
            $cryptedPwd = password_hash($_POST[$col], PASSWORD_BCRYPT);
            (new UserModel)->updateUserInfo($col, $cryptedPwd, $_SESSION['userId']);
        }
        else {
            (new UserModel)->updateUserInfo($col, $_POST[$col], $_SESSION['userId']);
        }
    }
}
header('Location:'.$GLOBALS['url_root'].'Fablab.php');