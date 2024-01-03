<?php


namespace APP\Http\Controllers;


class PostController extends Controller
{


    public function index(){
        echo 'hi this index of post controller';
    }


    public function create(){
        echo 'hi this is delete of post controller';
    }

    public function store(){
        echo 'hi this is store of post controller';
    }

    public function edit($id){
        echo 'hi this is edit of post controller';
    }

    public function update($id){
        echo 'hi this is update of post controller';
    }

    public function delete($id){
        echo 'hi this is delete of post controller';
    }

}