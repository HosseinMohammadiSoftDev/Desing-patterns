<?php

namespace App\DesignPatterns\Structural\Flyweight;

class SharedCharacter
{
    public function __construct(
        private readonly string $height,
        private readonly string $weight,
        private readonly string $hairColor,
    ){}

    public function reander(string $name): void
    {
        echo "reander characters height {$this->height},  weight {$this->weight}, haircolor {$this->hairColor},\n";
    }
}