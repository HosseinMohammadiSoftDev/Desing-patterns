<?php

namespace App\DesignPatterns\Structural\Composit;

class Book implements Product
{
    public function __construct(
        private readonly string $name,
        private readonly float $price
    ){
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}