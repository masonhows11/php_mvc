<?php

// for add config
require_once "../config/app.php";

// for add route
require_once "../routes/web.php";
require_once "../routes/api.php";

//var_dump(BASE_DIR);
$router = new Core\Router\Router();
$router->checkRoute();


