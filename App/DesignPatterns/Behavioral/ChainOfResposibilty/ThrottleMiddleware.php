<?php

namespace App\DesignPatterns\Behavioral\ChainOfResposibilty;

class ThrottelMiddleware implements Middleware
{

    public function handle($request, $next)
    {
        echo 'Throttel request';
        return $next($request);
    }
}