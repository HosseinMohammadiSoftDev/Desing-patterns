<?php

namespace App\DesignPatterns\Behavioral\ChainOfResposibilty;

interface Middleware
{
    public function handle($request, $next);
}