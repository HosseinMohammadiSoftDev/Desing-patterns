<?php

namespace App\DesignPatterns\Creational\Builder;

class BurgerDirector
{
    private BurgerBuilder $builder;

    public function setBurger(BurgerBuilder $builder): void
    {
        $this->builder = $builder;
    }

    public function buildBurger(): Burger
    {
        $this->builder->setBun();
        $this->builder->setPatty();
        $this->builder->setCheese();
        $this->builder->addTopping();

        return $this->builder->getBurger();
    }
}