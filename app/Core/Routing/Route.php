<?php


namespace App\Core\Routing;


class Route
{
    private static $routes = [];

    public static function add($methods, $uri, $action = null)
    {
        $methods = is_array($methods) ? $methods : [$methods];
        self::$routes[] = ['methods' => $methods, 'uri' => $uri, 'action' => $action];

    }

    public static function routes()
    {
        return self::$routes;
    }
}