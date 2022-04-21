<?php
require_once('../init/index.php');
require_once('../Models/DatabaseModel.php');

if (isset ($_SESSION['loggeduser']) && ($_SESSION['loggeduser'] === true)) {

    $infos = (new Database)->getTableInfos('outils');
    foreach($infos as $info) {
        $i = 1;
        while (array_key_exists($i, $info)) {
            $tableInfos[] = $info[$i];
            $i++;
        }
    }
    require('../Outils.php');
}
else {
    require($GLOBALS['url_root'].'/init/Errorpage.php');
}
