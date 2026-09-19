<?php

namespace App\DesignPatterns\Structural\Decorator\RealWorld;

class MilkCoffee extends CoffeeDecorator
{
    public function getCost(): int
    {
        return parent::getCost() + 2;
    }

    public function getDescription(): string
    {
        return parent::getDescription() . ' + milk';
    }
}