<?php

namespace App\DesignPatterns\Behavioral\Command;

class Invocer
{
    private array $commands = [];
    private array $undoState = [];

    public function addCommand(Command $command): void
    {
        $this->commands[] = $command;
    }

    public function executeCommands(): void
    {
        foreach ($this->commands as $command) {
            $command->execute();
            $this->undoState[] = $command; // save run command to history
        }

        $this->commands = [];
    }

    public function undo(): void
    {
        if (!empty($this->undoState)) { // undo latest property stack
            $command = array_pop($this->undoState);
            $command->undo();
        }

    }
}