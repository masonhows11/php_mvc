<?php


namespace Core\Router;


class Router
{
    private $current_route;
    private $method_name;
    private $routes;
    private $params;

    public function __construct()
    {
        $this->current_route = explode('/',CURRENT_ROUTE);
        global $routes;
        $this->routes = $routes;
        $this->method_name = $this->get_method();
    }


    public function get_method()
    {
            $method = strtolower($_SERVER['REQUEST_METHOD']);
            if($method == 'post'){
                if($_POST['method'] == 'put'){
                    $method = 'put';
                }
                if($_POST['method'] == 'delete'){
                    $method = 'delete';
                }
            }
            return $method;
    }

}