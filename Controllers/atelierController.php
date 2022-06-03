<?php

require_once($GLOBALS['server_root'].'/init/path.php');
require_once($GLOBALS['server_root'].'/Models/DatabaseModel.php');

if (isset ($_SESSION['loggeduser']) && ($_SESSION['loggeduser'] === true)) {

    $infos = (new Database)->getTableInfos('atelier');
    foreach($infos as $info) {
        $i = 1;
        while (array_key_exists($i, $info)) {
            $tableInfos[] = $info[$i];
            $i++;
        }
    }
    require($GLOBALS['server_root'].'/Atelier.php');
}
else {
    require($GLOBALS['server_root'].'/init/Errorpage.php');
}
