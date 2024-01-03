<?php


namespace Core\Router;



class Router
{
    private $current_route;
    private $method_name;
    private $routes;
    private $params = [];
    private $result = false;


    public function __construct()
    {
        $this->current_route = explode('/', CURRENT_ROUTE);
        global $routes;
        $this->routes = $routes;
        $this->method_name = $this->getMethod();
    }


    public function getMethod()
    {
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        if ($method == 'post') {
            if ($_POST['method'] == 'put') {
                $method = 'put';
            }
            if ($_POST['method'] == 'delete') {
                $method = 'delete';
            }
        }
        return $method;
    }

    public function checkRoute()
    {
        // for check method is post or get or put or delete
        $reserved_routes = $this->routes[$this->getMethod()];
        foreach ($reserved_routes as $route) {
            $reservedRouteArray = explode('/', $route['route']);
            if (sizeof($this->current_route) == sizeof($reservedRouteArray)) {
                foreach ($reservedRouteArray as $key => $value) {

                    if ($this->current_route[$key] == $value) {
                        if (!empty($reservedRouteArray[$key + 1])) {
                            if (substr($reservedRouteArray[$key + 1], 0, 1) == '{' && substr($reservedRouteArray[$key + 1], -1) == '}') {
                                array_push($this->params, $this->current_route[$key + 1]);
                            } else {
                                $this->params = [];
                            }

                        }
                    }

                    $controller = "\APP\Http\Controllers\\".$route['controller'];
                    $obj = new $controller;
                    if(method_exists($obj,$route['method'])){
                        try {
                            $reflection = new \ReflectionMethod($controller, $route['method']);
                            $parameter = $reflection->getNumberOfParameters();
                            if($parameter <= count($this->params)){
                                call_user_func_array([$obj,$route['method']],$this->params);
                            }
                        } catch (\ReflectionException $ex) {
                           return $ex->getMessage();
                        }
                    }
                }
            }
            $this->result = true;
        }
        if(!$this->result){
            echo 'controller not found';
        }
    }



}