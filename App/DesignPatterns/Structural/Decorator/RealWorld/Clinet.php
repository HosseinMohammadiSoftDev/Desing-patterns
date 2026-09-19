<?php

namespace App\DesignPatterns\Structural\Decorator\RealWorld;

class Cline
{
    public static function run()
    {
        $someCoffee = new SimpleCoffee();

        echo $someCoffee->getCost();
        echo $someCoffee->getDescription();

        $someCoffee = new MilkCoffee($someCoffee);

        echo $someCoffee->getCost();
        echo $someCoffee->getDescription();
    }
}