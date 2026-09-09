<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

class PayPalFactory implements PymentMethodFactory
{
    public function __construct(
        private string $email,
        private string $password
    ){}

    public function create(): PymentFactory
    {
        return new PayPal($this->email, $this->password);
    }
}