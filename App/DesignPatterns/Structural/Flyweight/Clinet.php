<?php

namespace App\DesignPatterns\Structural\Flyweight;

class Clinet
{
    public static function run()
    {
        $factory = new CharacterFactory();

        $player1 = new CharacterClinet('player1', $factory, '100', '200', 'bound');
        $player1->reander();

        $player2 = new CharacterClinet('player2', $factory, '120', '180', 'bound');
        $player2->reander();
    }
}