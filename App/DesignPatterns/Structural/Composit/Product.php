<?php

namespace App\DesignPatterns\Structural\Composit;

interface Product
{
    public function getName(): string;

    public function getPrice(): float;
}