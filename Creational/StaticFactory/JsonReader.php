<?php

namespace Creational\StaticFactory;

class JsonReader implements DataReader
{
    public function readData(string $fileName): void
    {
        echo "is Json reader";
    }
}