<?php
//// bootstrap
//// The first files, scripts and classes that are executed when running an application
define('BASE_PATH',__DIR__ . "/../");
require_once  BASE_PATH . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();

// for add config
require_once "../config/app.php";

// for add route
require_once "../routes/web.php";
require_once "../routes/api.php";