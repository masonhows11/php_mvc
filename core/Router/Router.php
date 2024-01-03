<?php


namespace Core\Router;


use ReflectionMethod;


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
        // var_dump(CURRENT_ROUTE);
        // var_dump($this->routes);
        // for check method is post or get or put or delete
       $reservedRoutes = $this->routes[$this->method_name];


        foreach ($reservedRoutes as $reservedRoute) {

            $reservedRouteArray = explode('/', $reservedRoute['route']);

            if (sizeof($this->current_route) == sizeof($reservedRouteArray))
            {
                foreach ($reservedRouteArray as $key => $value) {

                    if ($this->current_route[$key] == $value) {

                        if (!empty($reservedRouteArray[$key + 1])) {
                            if (substr($reservedRouteArray[$key + 1], 0, 1) == '{'
                                && substr($reservedRouteArray[$key + 1], -1) == '}') {
                                array_push($this->params, $this->current_route[$key + 1]);
                            } else {
                                $this->params = [];
                            }
                        }

                        $path = BASE_DIR . "/app/Http/Controllers/".$reservedRoute['controller'].".php";
                        if(!file_exists($path)){
                            echo $path;
                        }

                        $controller = "\APP\Http\Controllers\\" . $reservedRoute['controller'];
                        $obj = new $controller;
                        var_dump($obj);
                        if (method_exists($obj, $reservedRoute['method'])) {
                            try {
                                $reflection = new ReflectionMethod($controller, $reservedRoute['method']);
                                $parameter = $reflection->getNumberOfParameters();
                                if ( $parameter <= count($this->params)) {
                                    call_user_func_array([ $obj, $reservedRoute['method']], $this->params);
                                }
                            } catch (\ReflectionException $ex) {
                                return $ex->getMessage();
                            }
                        }
                        $this->result = true;

                    }


                }
            }

        }
        if (!$this->result) {
            echo 'controller not found';
        }
    }


}