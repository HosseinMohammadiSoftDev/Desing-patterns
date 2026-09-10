<?php

namespace App\DesignPatterns\Creational\Prototype;

class SqlBookPrototype extends BookPrototype
{
    public function __construct()
    {
        $this->topic = 'sql learn book';
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}