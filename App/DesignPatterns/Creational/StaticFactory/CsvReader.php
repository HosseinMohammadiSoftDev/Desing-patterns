<?php

namespace App\DesignPatterns\Creational\StaticFactory;

use App\DesignPatterns\Creational\StaticFactory\DataReader;

class CsvReader implements DataReader
{
    public function readData(string $fileName): void
    {
        echo "is CSV reader";
    }
}