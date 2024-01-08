<?php


namespace App\Core\Routing;


use App\Core\Request;
use App\Utilities\Url;

class Router
{


    private $request;
    private $routes;
    private $current_route;

    public function __construct()
    {
        $this->request = new Request();
        $this->routes = Route::routes();
        $this->current_route = Url::current_route();
    }

}