<?php

namespace App\DesignPatterns\Behavioral\Command;


use Couchbase\SubdocumentException;

class Clinet
{
    public static function run()
    {
        $resiver  = new Resiver();
        $invocer  = new Invocer();

        $invocer->addCommand(new AddCommand($resiver, 2));
        $invocer->addCommand(new SuntractCommand($resiver, 5));

        $invocer->executeCommands();

        echo $resiver->getValue();

        $invocer->undo();

        echo $resiver->getValue();
    }
}