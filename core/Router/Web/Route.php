<?php


namespace Core\Router\Web;


class Route
{

    public static function get($route, array $Context){

        $controller = $Context[0];
        $method = $Context[1];
        global $routes;
        array_push($routes['get'] , array('route' => $route , 'controller' => $controller, 'method' => $method));

    }

    public static function post($route, array $Context){
        $controller = $Context[0];
        $method = $Context[1];
        global $routes;
        array_push($routes['post'] , array('route' => $route , 'controller' => $controller, 'method' => $method));
    }

    public static function put($route, array $Context){
        $controller = $Context[0];
        $method = $Context[1];
        global $routes;
        array_push($routes['put'] , array('route' => $route , 'controller' => $controller, 'method' => $method));
    }

    public static function delete($route, array $Context){
        $controller = $Context[0];
        $method = $Context[1];
        global $routes;
        array_push($routes['delete'] , array('route' => $route , 'controller' => $controller, 'method' => $method));
    }

}