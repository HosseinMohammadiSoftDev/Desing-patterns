<?php

namespace App\DesignPatterns\Behavioral\Strategy;

class SilverDiscount implements DiscountStrategy
{
    public function calculateDiscount($price): float
    {
        return $price * 0.1; // 10% discount for silver members
    }
}