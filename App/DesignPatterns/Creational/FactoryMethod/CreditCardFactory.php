<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

class CreditCardFactory implements PymentMethodFactory
{
    public function __construct
    (
        private int $cardNumber,
        private int $cvv,
        private string $expirationDate,
    ){

    }

    public function create(): PymentFactory
    {
        return new CreditCard($this->cardNumber, $this->cvv, $this->expirationDate);
    }
}