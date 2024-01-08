<?php
//// bootstrap
//// The files, scripts and classes that are executed
//// when running an application in first time
define('BASE_PATH',__DIR__ . "/../");

include BASE_PATH . "/vendor/autoload.php";



$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();
$request = new  \App\Core\Request();

include BASE_PATH . "/Helpers/helpers.php";
include BASE_PATH . "/routes/web.php";

