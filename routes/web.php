<?php

use Core\Router\Web\Route;

Route::get('/',[\APP\Http\Controllers\HomeController::class,'index']);