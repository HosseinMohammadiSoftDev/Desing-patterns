<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

use Symfony\Polyfill\Php80\Php80;

class CreditCard implements PymentFactory
{
    public function __construct(
        private int $cardNumber,
        private int $cvv,
        private string $expiretionDate
    ){

    }

    public function processPyment(int $amount)
    {
        echo "Processing Pyment By Credit Card Implemmted" . PHP_EOL;
    }
}