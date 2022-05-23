<?php

require_once('../init/index.php');
require_once('../Models/DatabaseModel.php');
require_once('../Models/UserModel.php');

$columns = array('Nom_User_Utilisateurs', 'Prenom_User_Utilisateurs', 'Promo_User_Utilisateurs', 'Mail_User_Utilisateurs', 'Password_User');
foreach ($columns as $col) {
    echo $col;
    if (isset($_POST[$col])) {
        (new Database)->updateUserInfo($col, $_SESSION['user_id'], $_POST[$col]); //TO FIX
        echo $_POST[$col];
    }
    else {
        echo $_POST[$col];
    }
}

