<?php session_start();

try {
    session_destroy();
}
catch (Exception) {
    echo 'Il n\'y a pas de session active';
}

sleep(1);
header('Location:http://codicam.com/Site_Fablab/Fablab.php');