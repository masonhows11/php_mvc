<?php


namespace App\Http\Middleware;

use App\Http\Middleware\Contract\MiddlewareInterface;

class BlockFireFoxMiddleware implements MiddlewareInterface
{

    public function handle()
    {
        // request is global type
        // global $request;
        // var_dump($request);
        die('BlockFireFox');
    }
}