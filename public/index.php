<?php

include "../bootstrap/bootstrap.php";



//var_dump(\App\Core\Routing\Route::routes());
echo "<br/>";
$router = new \App\Core\Routing\Router();
$router->run();