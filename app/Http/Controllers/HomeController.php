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

        //// done
        /// this is simple
        /// this remove() method call on current user instance
        /// that contain user info with id = 10
        //  $user = new User(69);
        //  $result = $user->remove();
        //  var_dump($result);


        //// for remove() model using chaining method
        //   $result = (new User(10))->remove();
        //    var_dump($result);

        echo 'Hi From index HomeController';
    }

}