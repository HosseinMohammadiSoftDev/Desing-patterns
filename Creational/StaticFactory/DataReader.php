<?php

namespace Creational\StaticFactory;

Interface DataReader
{
    public function readData(string $fileName): void;
}