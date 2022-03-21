<?php session_start();

try {
    session_destroy();
    echo 'Vous avez bien été déconnecté';
}
catch (Exception) {
    echo 'Il n\'y a pas de session active';
}

?>
