<?php


namespace App\Core\Routing;


class Route
{
    private static $routes = [];
    public static function add($methods,$uri,$action = null)
    {
            
    }

    public static function routes()
    {
        return self::$routes;
    }
}