<?php

use App\Utilities\Asset;

include "../bootstrap/bootstrap.php";
echo 'hello' . PHP_EOL;
echo Asset::styles('app.css');

//////
// for add autoload php  for load all class & files
// base on namespaces
// ../ this mean return one step back in project path


//////
// for test composer autoload
// use App\Core\Request;
// echo $_SERVER['REQUEST_URI'] . "\n";
// $req = new Request()



