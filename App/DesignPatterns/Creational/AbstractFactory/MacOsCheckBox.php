<?php

namespace App\DesignPatterns\Creational\AbstractFactory;

class MacOsCheckBox implements CheckBox
{
    public function render(): string
    {
        return 'MacOS checkbox';
    }
}