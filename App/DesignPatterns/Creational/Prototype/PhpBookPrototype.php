<?php

namespace App\DesignPatterns\Creational\Prototype;

class PhpBookPrototype extends BookPrototype
{
    public function __construct()
    {
        $this->topic = 'php learn';
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}