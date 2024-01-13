<?php

include "../bootstrap/bootstrap.php";

// $router = new \App\Core\Routing\Router();
// $router->run();
// $route_pattern = '/^\/post\/(?<slug>[-%\w]+)$/';

$route = '/post/{slug}';
$pattern = "/^".str_replace(['/','{','}'],['\/','(?<','>[-%\w]+)'],$route)."$/";

nice_dump($route);
nice_dump($pattern);
nice_dump('/^\/post\/(?<slug>[-%\w]+)$/');