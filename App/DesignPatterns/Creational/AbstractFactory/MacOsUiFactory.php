<?php

namespace App\DesignPatterns\Creational\AbstractFactory;

class MacOsUiFactory implements UiFactory
{

    public function createButton(): Button
    {
        return new MacOsButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new MacOsCheckbox();
    }
}