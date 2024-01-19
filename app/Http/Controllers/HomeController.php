<?php


namespace App\Http\Controllers;


use App\Models\User;

class HomeController extends Controller
{

    public function index()
    {
        // $user = new User();
        // $result =  $user->find(10);

        $user = (new User())->find(10);
        // var_dump($user->getAttributes());
        echo "<br/>";
        var_dump($user->getAttribute('email'));
        // echo 'Hi From index HomeController';
    }

}