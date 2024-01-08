<?php


use App\Core\Routing\Route;

Route::get('/show/post',['Controller','method']);

Route::get('/',function (){
    echo "welcome to home";
});

Route::post('/store_post',function (){
    echo "store form";
});

Route::get('/posts',function (){
    echo "list posts";
});
Route::post('/update_post',function (){
    echo "update post";
});
