<?php

namespace App\DesignPatterns\Behavioral\State;

class TextEditor
{
    private WritingStateInterface $state;

    public function __construct()
    {
        $this->state = new DefaultText();
    }

    public function setState(WritingStateInterface $state): void
    {
        $this->state = $state;
    }

    public function type(string $words): void
    {
        $this->state->write($words);
    }
}