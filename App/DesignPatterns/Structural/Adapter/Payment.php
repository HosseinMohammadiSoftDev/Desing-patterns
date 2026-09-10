<?php

namespace App\DesignPatterns\Structural\Adapter;

interface Payment
{
    public function processPayment(int $amount);
}