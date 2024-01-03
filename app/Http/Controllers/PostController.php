<?php


namespace APP\Http\Controllers;


class PostController extends Controller
{


    public function index(){
        echo 'hi this index of post controller' . PHP_EOL;
    }


    public function create(){
        echo 'hi this is delete of post controller' . PHP_EOL;
    }

    public function store(){
        echo 'hi this is store of post controller' . PHP_EOL;
    }

    public function edit($id){
        echo 'hi this is edit of post controller' . PHP_EOL;
    }

    public function update($id){
        echo 'hi this is update of post controller' . PHP_EOL;
    }

    public function delete($id){
        echo 'hi this is delete of post controller' . PHP_EOL;
    }

}