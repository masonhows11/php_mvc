<?php

use Core\Router\Web\Route;

Route::get('/',[\APP\Http\Controllers\HomeController::class,'index']);


Route::get('/users',[\APP\Http\Controllers\UserController::class,'index']);
Route::get('/create/user',[\APP\Http\Controllers\UserController::class,'create']);
Route::post('/store/user',[\APP\Http\Controllers\UserController::class,'store']);
Route::get('/delete/user/{id}',[\APP\Http\Controllers\UserController::class,'delete']);

Route::get('/posts',[\APP\Http\Controllers\PostController::class,'index']);
Route::get('/create/post',[\APP\Http\Controllers\PostController::class,'create']);
Route::post('/store/post',[\APP\Http\Controllers\PostController::class,'store']);
Route::get('/delete/post/{id}',[\APP\Http\Controllers\PostController::class,'delete']);


echo CURRENT_ROUTE;
echo "<br/>";
global $routes;
print_r($routes);