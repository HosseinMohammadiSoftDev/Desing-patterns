<?php

namespace App\DesignPatterns\Structural\Decorator\RealWorld;

interface Coffee
{
    public function getCost(): int;

    public function getDescription(): string;
}