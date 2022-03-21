<?php session_start();

try {
    session_destroy();
}
catch (Exception) {
    echo 'Il n\'y a pas de session active';
}

sleep(2);
header('Location:../Fablab.php');
?>
