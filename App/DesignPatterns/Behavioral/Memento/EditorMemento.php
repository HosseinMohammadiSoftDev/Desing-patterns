<?php

namespace App\DesignPatterns\Behavioral\Memento;

class EditorMemento
{
    private string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}