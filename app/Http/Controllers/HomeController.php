<?php


namespace App\Http\Controllers;


use App\Models\User;

class HomeController extends Controller
{

    public function index()
    {

        // header("Content-type: application/json; charset=utf-8");
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


        $user = new User(67);
        $user->first_name = 'sara5532';
        $user->last_name = 'soltany nejad';
        $user->email = 'sara552@gmail.com';
        $user->save();
        echo $user->last_name . "<br/>";
        // var_dump($user->getAttributes(),$user->last_name);

        echo 'Hi From index HomeController';
    }

}