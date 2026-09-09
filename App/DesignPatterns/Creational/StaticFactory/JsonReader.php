<?php

namespace App\DesignPatterns\Creational\StaticFactory;

use App\DesignPatterns\Creational\StaticFactory\DataReader;

class JsonReader implements DataReader
{
    public function readData(string $fileName): void
    {
        echo "is Json reader";
    }
}