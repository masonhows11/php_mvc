<?php


use App\Core\Routing\Route;
use App\Http\Middleware\BlockFireFoxMiddleware;


Route::get('/null');
Route::get('/',['HomeController','index'],[BlockFireFoxMiddleware::class]);

Route::get('/posts',['PostController','index']);
Route::get('/post',['PostController','post']);


Route::get('/create/post',['PostController','create']);
Route::get('/edit/post',['PostController','edit']);


Route::get('/delete/post',['PostController','delete']);


// Route::post('/store_post',function (){
//    echo "store form";
// });
// Route::post('/update_post',function (){
//    echo "update post";
// });
//
//
// Route::put('/update_product',function (){
//    echo "update product";
// });
// Route::get('/posts',function (){
//    echo "list posts";
// });