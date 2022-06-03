<?php
require_once('/home/codicam/www/Site_Fablab/init/path.php');
require_once($GLOBALS['server_root'].'/Models/DatabaseModel.php');

if (isset ($_SESSION['loggeduser']) && ($_SESSION['loggeduser'] === true)) {

    $infos = (new Database)->getTableInfos('outils');
    foreach($infos as $info) {
        $i = 1;
        while (array_key_exists($i, $info)) {
            $tableInfos[] = $info[$i];
            $i++;
        }
    }
    require($GLOBALS['server_root'].'/Outils.php');
}
else {
    require($GLOBALS['server_root'].'/init/Errorpage.php');
}
