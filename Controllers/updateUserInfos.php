<?php

require_once('../init/index.php');
require_once('../Models/DatabaseModel.php');
require_once('../Models/UserModel.php');

$columns = array('Nom_User_Utilisateurs', 'Prenom_User_Utilisateurs', 'Promo_User_Utilisateurs', 'Mail_User_Utilisateurs', 'Password_User');
foreach ($columns as $col) {
    if (isset($_POST[$col]) && !empty($_POST[$col])) {
        (new UserModel)->updateUserInfo($col, $_POST[$col], $_SESSION['userId']);
    }
}

