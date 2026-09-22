<?php

namespace App\DesignPatterns\Structural\Flyweight;

class CharacterClinet
{
    private string $name;

    private SharedCharacter $sharedCharacter;

    public function __construct(
        string $name,
        CharacterFactory $factory,
        $height,
        $weight,
        $hairColor,
    ){
        $this->name = $name;
        $this->sharedCharacter = $factory->getSharedCharecters($height, $weight, $hairColor);
    }

    public function reander(): void
    {
        $this->sharedCharacter->reander($this->name);
        echo "cos";
    }


}