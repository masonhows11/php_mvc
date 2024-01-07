<?php

use App\Core\Router\Router;

include "../bootstrap/bootstrap.php";


// echo \App\Utilities\Url::current_route();

// $router = new Router();
// $router->run();
$req = new \App\Core\Request();
var_dump($req->issetKey('name'));