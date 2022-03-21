<?php session_start();

if (isset ($_SESSION['loggeduser'])) {
    echo 'ok';
}
else {
    echo 'non';
}
