<?php
require_once('/home/codicam/www/Site_Fablab/init/path.php');

if ((!isset($_POST['prenom']) || empty($_POST['prenom'])) || (!isset($_POST['nom']) || empty($_POST['nom'])) ||
    (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || empty($_POST['email'])) ||
    (!isset($_POST['promo']) || empty($_POST['promo'])) || (!isset($_POST['password']) || empty($_POST['password'])))
{
    echo('Remplissez tous les champs s\'il vous plaît');
    return;
}

$cryptedPwd = password_hash($_POST['password'], PASSWORD_BCRYPT);
require_once($GLOBALS['server_root'].'/Models/UserModel.php');
$userData = (new UserModel)->sign_up($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['promo'], $cryptedPwd);

require_once($GLOBALS['server_root'].'/Models/DatabaseModel.php');
$members = (new Database)->getTableInfos('utilisateurs');
foreach($members as $info) {
    $tableInfos[] = $info['Nom_User_Utilisateurs'].' '.$info['Prenom_User_Utilisateurs'];
}

require($GLOBALS['server_root'].'/printSignUp.php');