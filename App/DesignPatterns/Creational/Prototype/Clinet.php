<?php

namespace App\DesignPatterns\Creational\Prototype;

class Clinet
{
    public static function run(): void
    {
        $phpProto = new PhpBookPrototype();
        $sqlProto = new SqlBookPrototype();

        $book1 = clone $phpProto;
        $book1->setTitle('php');

        $book2 = clone $sqlProto;
        $book2->setTitle('sql2');

        echo "Book 1 is: " . $book1->getTitle() . " is Topicing: " . $book1->getTopic() . PHP_EOL;
    }
}