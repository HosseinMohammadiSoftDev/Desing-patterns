<?php

namespace App\DesignPatterns\Structural\Proxy;

class WeatherService implements Subject
{
    public function __construct(
        private string $apiKey,
        private string $baseUrl,
    ){}

    public function request(): void
    {
        echo 'return weather data from remote api.';
    }
}