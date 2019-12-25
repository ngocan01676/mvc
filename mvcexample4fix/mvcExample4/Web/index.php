<?php 
define("WEBROOT",str_replace("Web/index.php","",$_SERVER['SCRIPT_NAME']));
define("ROOT", str_replace("Web/index.php","", $_SERVER["SCRIPT_FILENAME"].'src/'));
define("BASE",str_replace("Web/index.php","",$_SERVER["SCRIPT_FILENAME"]));

use MVC\URL\Dispatcher;
require BASE."vendor/autoload.php";
$disPath=new Dispatcher();
$disPath->disPatch();

 ?>