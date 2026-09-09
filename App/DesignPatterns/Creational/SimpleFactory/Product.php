<?php

namespace App\DesignPatterns\Creational\SimpleFactory;

Interface Product
{
    public function getName(): string;

    public function getPrice(): float;

    public function getDescription(): string;
}