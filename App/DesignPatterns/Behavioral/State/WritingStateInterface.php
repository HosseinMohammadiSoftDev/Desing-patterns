<?php

namespace App\DesignPatterns\Behavioral\State;

interface WritingStateInterface
{
    public function write(string $words);
}