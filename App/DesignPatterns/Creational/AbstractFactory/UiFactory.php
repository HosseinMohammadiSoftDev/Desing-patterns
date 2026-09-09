<?php

namespace App\DesignPatterns\Creational\AbstractFactory;

interface UiFactory
{
    public function createButton(): Button;

    public function createCheckbox(): Checkbox;
}