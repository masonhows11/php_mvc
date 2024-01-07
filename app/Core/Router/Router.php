<?php


namespace App\Core\Router;


class Router
{

    private $routes;

    public function __construct()
    {
        $this->routes = [
            'pages/page_one' => 'pages/page_one.php',
            'pages/page_tow' => 'pages/page_two.php',
            'pages/page_three' => 'pages/page_three.php',
            ];
    }

}