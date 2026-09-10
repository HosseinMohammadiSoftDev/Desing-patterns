<?php

namespace App\DesignPatterns\Creational\Singleton;

class Database
{
    private static ?Database $instance = null;

    private function __construct()
    {
    }

    public static function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function test(): void
    {
        echo 'test';
    }
}