<?php

namespace App\DesignPatterns\Structural\Adapter;

class Clinet
{
    public static function run()
    {
        $paymentGetway = new PaymentGetway(); // example zarinPal
        $paymentAdapter = new PaymentGetwayAdapter($paymentGetway);

        $paymentProcessor = new PaymentProcessor($paymentAdapter);

        $paymentProcessor->process(100_000);
    }
}