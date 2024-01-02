<?php


use APP\Http\Controllers\Api\UserController;
use Core\Router\Api\Route;

Route::get('create_user',[UserController::class,'index']);