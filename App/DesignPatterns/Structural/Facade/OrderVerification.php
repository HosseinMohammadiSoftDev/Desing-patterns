<?php

namespace App\DesignPatterns\Structural\Facade;

class OrderVerification
{
    public function verifyOrder(int $orderId): bool
    {
        return true;
    }
}