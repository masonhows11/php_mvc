<?php

use Core\Router\Web\Route;

Route::get('/',[\APP\Http\Controllers\HomeController::class,'index']);

echo CURRENT_ROUTE;
echo "<br/>";
global $routes;
print_r($routes);