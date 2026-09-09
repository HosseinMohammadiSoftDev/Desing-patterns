<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

class PayPal implements PymentFactory
{
    public function __construct(
        private string $email,
        private string $password
    ){
    }

    public function processPyment(int $amount)
    {
        echo "process by PayPal" . PHP_EOL;
    }
}