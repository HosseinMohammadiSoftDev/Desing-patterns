<?php

namespace App\DesignPatterns\Structural\Adapter;

class PaymentGetway
{
    public function makePayment(int $amount): void
    {
        echo "Payment of {$amount} is being processed}";
    }
}