<?php
require_once('/home/codicam/www/Site_Fablab/init/path.php');

if (isset ($_SESSION['username']) || isset ($_SESSION['admin'])) {
    echo 'Bonjour '.$_SESSION['username'].' vous êtes déjà connecté.';
}
else {
    if (isset($_POST['email'], $_POST['password']) && !empty($_POST['email']) && filter_var($_POST['email'],
            FILTER_VALIDATE_EMAIL) && !empty($_POST['password'])) {

        require_once('../Models/UserModel.php');
        require_once('../Models/DatabaseModel.php');

        if ( (new UserModel)->sign_in($_POST['email'], $_POST['password']) ) { //Check matching email and password
            $_SESSION['loggeduser'] = true;

            $username = (new Database)->getPreciseInfo('utilisateurs','Prenom_User_Utilisateurs', "Mail_User_Utilisateurs", $_POST['email']);
            $admin = (new Database)->getPreciseInfo('utilisateurs','isUserStaff',"Mail_User_Utilisateurs", $_POST['email']);
            $userId = (new Database)->getPreciseInfo('utilisateurs','Id_User_Utilisateurs',"Mail_User_Utilisateurs", $_POST['email']);
            $_SESSION['username'] = implode('', $username);
            $_SESSION['admin'] = implode('', $admin);
            $_SESSION['userId'] = implode('', $userId);

            ?>
            <div >
                Bonjour <?php echo $_SESSION['username']; ?> et bienvenue, vous pouvez accéder au site.
            </div> <?php
            sleep(1);
            header('Location:'.$GLOBALS['url_root'].'Fablab.php');
        }
        else {
            echo 'Email ou mot de passe incorrect, veuillez réessayer';
        }
    }
    else {
        echo 'Vous n\'avez pas rempli tous les champs permettant la connexion';
    }
}
