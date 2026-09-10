<?php

namespace App\DesignPatterns\Structural\Adapter;

class PaymentProcessor
{
    private Payment  $payment;

    public function __construct(Payment $payment)
    {
        $this->payment = $payment;
    }

    public function process(int $amount): void
    {
        # process ....
        $this->payment->processPayment($amount);
    }
}