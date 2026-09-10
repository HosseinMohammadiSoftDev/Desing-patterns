<?php

namespace App\DesignPatterns\Structural\Adapter;

class PaymentGetwayAdapter implements Payment
{
    private PaymentGetway $paymentGetway;

    public function __construct(PaymentGetway $paymentGetway)
    {
        $this->paymentGetway = $paymentGetway;
    }

    public function processPayment(int $amount): void
    {
        $this->paymentGetway->makePayment($amount);
    }
}