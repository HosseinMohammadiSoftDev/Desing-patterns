<?php

namespace App\DesignPatterns\Creational\AbstractFactory;

class WindowsCheckBox implements CheckBox
{
    public function render(): string
    {
        return 'Windows checkbox';
    }
}