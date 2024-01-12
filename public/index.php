<?php

include "../bootstrap/bootstrap.php";

//$router = new \App\Core\Routing\Router();
//$router->run();
$route_pattern = '/^\/post\/(?<slug>[-%\w]+)$/';

$route = '/post/{slug}';
$uri1 = '/post/what-is-php-language-programming';
$uri2 = '/post/why-u-need-learn-programming';
$uri3 = '/product/iphone-15-black';

$result1 = preg_match($route_pattern,$uri1,$matches);
nice_dump($result1);
nice_dump($matches);

$result2 = preg_match($route_pattern,$uri2,$matches2);
nice_dump($result2);
nice_dump($matches2);