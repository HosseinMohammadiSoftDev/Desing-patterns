<?php

namespace App\DesignPatterns\Behavioral\ChainOfResposibilty;

class AuthorizationMiddleware implements Middleware
{

    public function handle($request, $next)
    {
        echo 'authorization request';
        return $next($request);
    }
}