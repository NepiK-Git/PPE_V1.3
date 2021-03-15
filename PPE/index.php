<?php session_start();

define('WEBROOT', dirname(__FILE__));
define('ROOT', dirname(WEBROOT));
define('CORE', ROOT.'/core');
define('BASE_URL', dirname(dirname($_SERVER['SCRIPT_NAME'])));

require "core/functions.php";
require "core/constants.php";
require "core/Alerts.php";

$bdd = connectBDD(HOSTNAME, DATABASE, USERNAME, PASSWORD);

if (isset($_GET['p'])) {   
    if(file_exists("controleur/".$_GET['p'].".controleur.php"))
        $page = $_GET['p'];
    else
        $page = "404";
} else {
    $page = "accueil";
}

ob_start();
require "controleur/".$page.".controleur.php";
$content = ob_get_clean();

require "template.php";

?>