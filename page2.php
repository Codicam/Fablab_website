<?php
require_once('init/path.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page test</title>
    <link rel="stylesheet" href="<?php echo $GLOBALS['url_root'].'/CSS/main.css';?>"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['url_root'].'/CSS/popup.css';?>"/>
</head>
<body>

<?php
if (isset ($_SESSION['loggeduser']) && ($_SESSION['loggeduser'] === true)):?>
    <h3 style="margin: 50px auto;">Ceci est une page test, l'utilisateur doit être connecté pour la voir.</h3>
    <?php echo $_SERVER['DOCUMENT_ROOT']; ?>
<?php else :
    require('init/Errorpage.php');
endif; ?>


</body>
</html>