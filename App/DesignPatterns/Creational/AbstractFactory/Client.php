<?php

namespace App\DesignPatterns\Creational\AbstractFactory;

class Client
{
    public function __construct(public UiFactory $factory) {}

    public function run(): string
    {
        $button = $this->factory->createButton();

        $checkbox = $this->factory->createCheckbox();

        return $button->render() . PHP_EOL . $checkbox->render();
    }
}