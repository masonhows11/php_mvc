<?php
// set app name
define("APP_NAME", "mini_mvc");
// base app url like mini_mvc.test
define("BASE_URL", "http://$_SERVER[HTTP_HOST]");
// __DIR__ get current dir + one step back dir
// its full base directory
define("BASE_DIR", realpath(__DIR__ . "/../"));

// for get just current route
$current_route = explode('?', $_SERVER['REQUEST_URI'])[0];
// for delete first / start in route
$current_route = substr($current_route, 1);
define('CURRENT_ROUTE', $current_route);


global $routes;
$routes = [
    'get' => [],
    'post' => [],
    'put' => [],
    'delete' => [],
];