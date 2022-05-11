<?php

require_once('../init/index.php');
include($_SERVER['DOCUMENT_ROOT'].'/Models/UserModel.php');


$column = 'Prenom_User_Utilisateurs';
$idUser = 5;
$data = (new Database)->updateUserInfo($_SESSION['user_id'],'Theo');

