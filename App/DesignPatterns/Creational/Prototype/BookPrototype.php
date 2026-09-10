<?php

namespace App\DesignPatterns\Creational\Prototype;

abstract class BookPrototype
{
    protected $title;
    protected $topic;

    abstract protected function __clone();

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
    public function getTitle(): string
    {
        return $this->title;
    }

    public function getTopic(): string
    {
        return $this->topic;
    }

}