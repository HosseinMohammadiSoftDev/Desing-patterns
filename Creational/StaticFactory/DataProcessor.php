<?php

namespace Creational\StaticFactory;

use http\Exception\InvalidArgumentException;

class DataProcessor
{
    public static function createDataReader(string $type): DataReader
    {
        return match($type) {
            'json'  => new JsonReader(),
            'xml'   => new XmlReader(),
            'csv'   => new CsvReader(),
            default => throw new InvalidArgumentException()
        };
    }
}