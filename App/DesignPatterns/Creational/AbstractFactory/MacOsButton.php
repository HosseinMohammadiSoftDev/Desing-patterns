<?php

namespace App\DesignPatterns\Creational\AbstractFactory;

class MacOsButton implements Button
{
    public function render(): string
    {
        return 'MacOS Button';
    }
}