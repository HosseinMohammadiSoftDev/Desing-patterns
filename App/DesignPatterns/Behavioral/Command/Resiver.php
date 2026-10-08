<?php

namespace App\DesignPatterns\Behavioral\Command;

class Resiver
{
    private int $value = 0;

    public function add (int $value) : void
    {
        $this->value += $value;
    }

    public function subtract (int $value) : void
    {
        $this->value -= $value;
    }

    public function getValue() : int
    {
        return $this->value;
    }
}