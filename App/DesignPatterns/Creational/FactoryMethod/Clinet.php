<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

class Clinet
{
    public function run()
    {
        $creditCartFactory = new CreditCardFactory('1234556', '567', '12/24');
        $creditCaet = $creditCartFactory->create();
        $creditCaet->processPyment(1234);

        $payPalFactory = new PayPalFactory('test@example.com', 'password');
        $payPal = $payPalFactory->create();
        $payPal->processPyment(1234);



    }
}