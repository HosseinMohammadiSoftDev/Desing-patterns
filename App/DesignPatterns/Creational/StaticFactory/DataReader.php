<?php

namespace App\DesignPatterns\Creational\StaticFactory;

Interface DataReader
{
    public function readData(string $fileName): void;
}