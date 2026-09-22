<?php

namespace App\DesignPatterns\Structural\Flyweight;

class CharacterFactory
{
    private array $characters = [];

    public function getSharedCharecters($height, $weight, $hairColor)
    {
        $key = "{$weight}+{$height}+{$hairColor}";

        if (!isset($this->characters[$key])) {
            echo "create character\n";

            $this->characters[$key] = new SharedCharacter($height, $weight, $hairColor);
        }

        return $this->characters[$key];
    }
}