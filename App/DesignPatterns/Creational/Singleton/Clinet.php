<?php

namespace App\DesignPatterns\Creational\Singleton;


class Clinet
{
    public static function run()
    {
        $database1 = Database::getInstance();
        $database2 = Database::getInstance();

        var_dump($database1 === $database2);
    }
}