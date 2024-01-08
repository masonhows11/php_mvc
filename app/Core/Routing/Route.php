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

    // get http method
    public static function get($uri, $action = null)
    {
        self::add('get', $uri, $action );
    }

    // post http method
    public static function post($uri, $action = null)
    {
        self::add('post', $uri, $action );
    }

    // put http method
    public static function put($uri, $action = null)
    {
        self::add('put', $uri, $action );
    }

    // patch http method
    public static function patch($uri, $action = null)
    {
        self::add('patch', $uri, $action );
    }

    // delete http method
    public static function delete($uri, $action = null)
    {
        self::add('delete',$uri, $action );
    }

    //// return routes
    public static function routes()
    {
        return self::$routes;
    }
}