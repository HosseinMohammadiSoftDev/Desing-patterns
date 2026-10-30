<?php

namespace App\DesignPatterns\Behavioral\Strategy;

class Item
{

    public string $name;
    public float $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}