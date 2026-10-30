<?php

namespace App\DesignPatterns\Behavioral\State;

class UpperCase implements \App\DesignPatterns\Behavioral\State\WritingStateInterface
{
    public function write(string $words)
    {
        echo strtoupper($words) . "\n";
    }
}