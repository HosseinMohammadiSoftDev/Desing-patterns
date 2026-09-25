<?php

namespace App\DesignPatterns\Behavioral\ChainOfResposibilty;

use http\Env\Response;

class Kernel
{
    protected array $middlewares = [
        LoginMiddleware::class,
        AuthorizationMiddleware::class,
        ThrottleMiddleware::class
    ];

    public function handel ($request)
    {
        $pipLine = array_reduce($this->middlewares, function ($next, $middleware) {
            return function ($request) use ($middleware, $next) {
                return (new $middleware())->handle($request, $next);
            };
        }, function ($request) {
            return 'not found, 404';
        });

        return $pipLine($request);
    }
}