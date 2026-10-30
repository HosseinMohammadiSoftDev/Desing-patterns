<?php

namespace App\DesignPatterns\Behavioral\Strategy;

class GoldDiscount implements DiscountStrategy
{
    public function calculateDiscount($price): float
    {
        return $price * 0.2; // 20% discount for gold members
    }
}