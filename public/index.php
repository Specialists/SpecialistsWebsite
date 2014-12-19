<?php



error_reporting(-1);
//error_reporting(E_ALL);
ini_set('display_errors', '1');
date_default_timezone_set('America/New_York');

//define("ROOT", realpath(__dir__."/")); //PRIVATE DIRECTORY
define("CLIENT_IP", $_SERVER['REMOTE_ADDR']);



define("BASE_ASSET_DIR", "http://DOMAINNAME.COM/");

require_once(ROOT . "/application/kernel/Kernel.php");

Kernel::run();
