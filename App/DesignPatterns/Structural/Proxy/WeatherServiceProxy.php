<?php

namespace App\DesignPatterns\Structural\Proxy;


class WeatherServiceProxy implements Subject
{
    private WeatherService $weatherService;
    private array $cache;

    public function __construct(string $apiKey, string $baseUrl)
    {
        $this->weatherService = new WeatherService($apiKey, $baseUrl);
        $this->cache = [];
    }

    public function request(): void
    {
        $cacheKey = $this->genarateCacheKey();

        if (isset($this->cache[$cacheKey])) {
            echo 'cache key already exists.';
            return;
        }

        $this->weatherService->request();
        $this->cache[$cacheKey];

    }

    private function genarateCacheKey(): string
    {
        return date('Y-m-d-H-i-sD, d M Y H:i:s');
    }
}