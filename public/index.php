<?php

include "../bootstrap/bootstrap.php";

$new_user = [
    "id" => rand(5,1000),
    "name" => "sara",
    "family" => "bahrami"
];

$user = new \App\Models\User();
// $user->create($new_user);
// var_dump($user->find(386));
var_dump($user->getAll());
//$router = new \App\Core\Routing\Router();
//$router->run();
