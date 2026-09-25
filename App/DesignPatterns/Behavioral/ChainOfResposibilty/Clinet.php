<?php

namespace App\DesignPatterns\Behavioral\ChainOfResposibilty;

class Clinet
{
    public static function run()
    {
        $request = 'laravel request';

        $kernel = new Kernel();
        $response = $kernel->handel($request);

    }
}