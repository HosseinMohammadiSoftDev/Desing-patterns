<?php

namespace App\DesignPatterns\Creational\Builder;

class BasicBurgerBuilder implements BurgerBuilder
{
    private Burger $burger;

    public function __construct()
    {
        $this->burger = new Burger();
    }

    public function setBun(): void
    {
        $this->burger->setBub('bun');
    }

    public function setPatty(): void
    {
        $this->burger->setPatty('patty');
    }

    public function setCheese(): void
    {
        $this->burger->setCheese('cheese');
    }

    public function addTopping(): void
    {
        $this->burger->setTopping(['khar', 'test']);
    }

    public function getBurger(): Burger
    {
        return $this->burger;
    }
}