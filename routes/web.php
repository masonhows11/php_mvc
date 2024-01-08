<?php


use App\Core\Routing\Route;


Route::get('/null');
Route::get('/',['HomeController','index']);

Route::get('/post',['PostController','index']);
Route::get('/posts',function (){
    echo "list posts";
});

Route::post('/store_post',function (){
    echo "store form";
});
Route::post('/update_post',function (){
    echo "update post";
});


Route::put('/update_product',function (){
    echo "update product";
});
