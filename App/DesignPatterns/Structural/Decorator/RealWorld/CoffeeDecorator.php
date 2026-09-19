<?php

namespace App\DesignPatterns\Structural\Decorator\RealWorld;

class CoffeeDecorator implements Coffee
{
    private Coffee $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost(): int
    {
        return $this->coffee->getCost();
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription();
    }
}