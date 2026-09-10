<?php

namespace App\DesignPatterns\Creational\Builder;

class Cline
{
    public static function run(): void
    {
        $director = new BurgerDirector();

        $basicBuilder = new BasicBurgerBuilder();

        $director->setBurger($basicBuilder);

        $basicBuilder = $director->buildBurger();

        echo $basicBuilder->getBurgerInfo();
    }
}