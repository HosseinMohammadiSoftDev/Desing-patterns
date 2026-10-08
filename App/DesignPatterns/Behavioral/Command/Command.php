<?php

namespace App\DesignPatterns\Behavioral\Command;

interface Command
{
    public function execute();

    public function undo();
}