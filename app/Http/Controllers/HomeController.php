<?php


namespace App\Http\Controllers;


use App\Models\User;

class HomeController extends Controller
{

    public function index()
    {
        //// done
        // $user = new User(10);
        // var_dump($user->getAttribute('email'));

        //// done
        //  $user = (new User())->find(10);
        //  var_dump($user->getAttributes());
        //  echo "<br/>";
        //  var_dump($user->getAttribute('email'));

        //// done
        // get attribute value without using any method
        // like $user->email
        //  $user = new User(10);
        //  var_dump($user->email);

        //// done
        //  $user_name = (new User(10))->name;
        //  echo $user_name;

        echo 'Hi From index HomeController';
    }

}