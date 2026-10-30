<?php

namespace App\DesignPatterns\Behavioral\Strategy;

interface DiscountStrategy
{
    public function calculateDiscount($price): float;
}