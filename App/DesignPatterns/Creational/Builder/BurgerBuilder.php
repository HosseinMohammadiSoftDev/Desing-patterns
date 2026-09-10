<?php

namespace App\DesignPatterns\Creational\Builder;

interface BurgerBuilder
{
    public function setBun();
    public function setPatty();
    public function setCheese();
    public function addTopping();
    public function getBurger(): Burger;
}