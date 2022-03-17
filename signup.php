<?php session_start();

// TO DO
// Securiser les mdp et la connexion avec hash et verify

if ((!isset($_POST['prenom']) || empty($_POST['prenom'])) || (!isset($_POST['nom']) || empty($_POST['nom'])) ||
    (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || empty($_POST['email'])) ||
    (!isset($_POST['promo']) || empty($_POST['promo'])) || (!isset($_POST['password']) || empty($_POST['password']))) {
    echo('Remplissez tous les champs s\'il vous plaît');
    return;
}

$cryptedPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);
require_once('Models/UserModel.php');
$userData = (new UserModel)->sign_up($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['promo'], $cryptedPassword);

require_once("Models/DatabaseModel.php");
$members = (new Database)->getAllDbInfos('utilisateurs', 'Nom_User_Utilisateurs', 'Prenom_User_Utilisateurs');

require('printSignUp.php')
?>