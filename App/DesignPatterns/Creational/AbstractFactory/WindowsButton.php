<?php

namespace App\DesignPatterns\Creational\AbstractFactory;

class WindowsButton implements Button
{

    public function render(): string
    {
        return 'Windows Button';
    }
}