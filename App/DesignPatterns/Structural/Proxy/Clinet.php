<?php

namespace App\DesignPatterns\Structural\Proxy;

class Clinet
{
    public static function run()
    {
        $weatherService = new WeatherService('112123eses', 'google.com');
        $weatherService->request();

        $weatherServiceProxy = new WeatherService('asasdsadewrwer', 'yahoo.com');
        $weatherServiceProxy->request();
    }
}