<?php

use Core\Router\Web\Route;

Route::get('/',[\APP\Http\Controllers\HomeController::class,'index']);


Route::get('/users',[\APP\Http\Controllers\UserController::class,'index']);
Route::get('/create/user',[\APP\Http\Controllers\HomeController::class,'create']);
Route::get('/delete/user',[\APP\Http\Controllers\HomeController::class,'delete']);

echo CURRENT_ROUTE;
echo "<br/>";
global $routes;
print_r($routes);