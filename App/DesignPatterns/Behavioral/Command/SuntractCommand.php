<?php

namespace App\DesignPatterns\Behavioral\Command;

class SuntractCommand implements Command
{
    public function __construct(
        private readonly Resiver $resiver,
        private readonly int $value
    ) {

    }


    public function execute(): void
    {
        $this->resiver->subtract($this->value);
    }

    public function undo(): void
    {
        $this->resiver->add($this->value);
    }
}