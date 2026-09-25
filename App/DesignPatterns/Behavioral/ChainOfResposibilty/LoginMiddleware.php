<?php

namespace App\DesignPatterns\Behavioral\ChainOfResposibilty;

class LoginMiddleware implements Middleware
{

    public function handle($request, $next)
    {
        echo 'login request';
        return $next($request);
    }
}