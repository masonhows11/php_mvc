<?php
//// bootstrap
//// The first files, scripts and classes that are executed when running an application
define('BASE_PATH',__DIR__ . "/../");

include BASE_PATH . "/vendor/autoload.php";



$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();

include BASE_PATH . "/Helpers/Helpers.php";