<?php

namespace App\DesignPatterns\Creational\AbstractFactory;

class WindowsUiFactory implements UiFactory
{

    public function createButton(): Button
    {
        return new WindowsButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new WindowsCheckbox();
    }
}