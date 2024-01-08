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
        $this->current_route = $this->findRoute($this->request) ?? null;
        var_dump($this->current_route);
    }

    public function findRoute(Request $request)
    {
        // echo  $request->getMethod() . " " . $request->getUri();
        foreach ($this->routes as $route) {
            if (in_array($request->getMethod(), $route['methods']) && $request->getUri() == $route['uri']) {
                return $route;
            }
        }
        return null;
    }

    public function run()
    {
        # 405 : invalid request method


        # 404 : uri not exist


        # action : null


        # action : closure


        # action  : Controller@method
        

        # action : ['Controller','method']


    }
}