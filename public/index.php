<?php

include "../bootstrap/bootstrap.php";

//////
// for add autoload php  for load all class & files
// base on namespaces
// ../ this mean return one step back in project path


//////
// for test composer autoload
// use App\Core\Request;
// echo $_SERVER['REQUEST_URI'] . "\n";
// $req = new Request()


////
$uri = $_SERVER['REQUEST_URI'];
/// get route with query parameter
$full_route = $uri;
/// get route with out query parameter
$simple_route = strtok($uri,'?');


echo $full_route . PHP_EOL;
echo "<br/>";
echo $simple_route .PHP_EOL;


