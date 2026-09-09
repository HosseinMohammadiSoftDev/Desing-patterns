<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

interface PymentMethodFactory
{
    public function create(): PymentFactory;
}