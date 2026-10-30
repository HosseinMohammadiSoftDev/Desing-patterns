<?php

namespace App\DesignPatterns\Behavioral\State;

class Clinet
{
    public static function run()
    {
        $editor = new TextEditor();

        $editor->type("First line");

        $editor->setState(new UpperCase());

        $editor->type("Second Line");
        $editor->type("Third Line");

    }
}