<?php

 include "../bootstrap/bootstrap.php";
 



echo site_url("product/index");

////// 

// for add autoload php  for load all class & files
// base on namespaces
// ../ this mean return one step back in project path


//////

// for test composer autoload
// use App\Core\Request;
// echo $_SERVER['REQUEST_URI'] . "\n";
// $req = new Request()