<?php

use App\Core\Routing\Route;

include "../bootstrap/bootstrap.php";

// $router = new \App\Core\Routing\Router();
// $router->run();



Route::add('get','/',function (){
    echo "welcome to home";
});
Route::add(['post'],'/store_post',function (){
    echo "store form";
});

Route::add(['get'],'/posts',function (){
    echo "list posts";
});
Route::add(['post'],'/update_post',function (){
    echo "update post";
});

var_dump(Route::routes());