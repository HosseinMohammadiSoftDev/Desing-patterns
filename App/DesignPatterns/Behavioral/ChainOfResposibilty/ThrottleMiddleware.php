<?php

namespace App\DesignPatterns\Behavioral\ChainOfResposibilty;

class ThrottleMiddleware implements Middleware
{

    public function handle($request, $next)
    {
        echo 'Throttle request';
        return $next($request);
    }
}