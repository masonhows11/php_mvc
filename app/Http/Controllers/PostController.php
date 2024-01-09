<?php


namespace App\Http\Controllers;


class PostController extends Controller
{


    public function index(){
        echo 'Index in method post controller' . PHP_EOL;
        view('pages.page_two');
    }

    public function post()
    {
        echo 'Post in method Post controller' . PHP_EOL;
        die();
    }


    public function create(){
        echo 'Create method post controller' . PHP_EOL;
        die();
    }

    public function store(){
        echo 'Store method post controller' . PHP_EOL;
        die();
    }

    public function edit(){
        echo 'Edit method post controller' . PHP_EOL;
        die();
    }

    public function update($id){
        echo 'update method post controller' . PHP_EOL;
        die();
    }

    public function delete($id){
        echo 'Delete method post controller' . PHP_EOL;
        die();
    }

}