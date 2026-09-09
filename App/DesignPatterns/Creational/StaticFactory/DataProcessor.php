<?php

namespace App\DesignPatterns\Creational\StaticFactory;

use App\DesignPatterns\Creational\StaticFactory\CsvReader;
use App\DesignPatterns\Creational\StaticFactory\DataReader;
use App\DesignPatterns\Creational\StaticFactory\JsonReader;
use App\DesignPatterns\Creational\StaticFactory\XmlReader;
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