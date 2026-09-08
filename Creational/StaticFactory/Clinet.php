<?php

namespace Creational\StaticFactory;

class Clinet
{
    public function run(string $type): void
    {
        $dataReader = DataProcessor::createDataReader($type);

        $dataReader->readData($type);
    }
}