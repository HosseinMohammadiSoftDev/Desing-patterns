<?php

namespace Creational\StaticFactory;

class CsvReader implements DataReader
{
    public function readData(string $fileName): void
    {
        echo "is CSV reader";
    }
}