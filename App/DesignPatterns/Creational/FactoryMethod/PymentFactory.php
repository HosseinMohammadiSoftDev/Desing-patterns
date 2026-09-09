<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

interface PymentFactory
{
    public function processPyment(int $amount);
}