<?php

namespace App\DesignPatterns\Structural\Composit;

class Gadget implements Product
{
    public function __construct(
        private readonly string $name,
        private readonly string $price
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