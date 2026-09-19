<?php

namespace App\DesignPatterns\Structural\Facade;

class Clinet
{
    public static function run()
    {
        $orderId = 1234;
        $amount = 100;

        $facade = new OrderFacade();

        if (!$facade->placeOrder($orderId, $amount))
            echo "filed to process\n";

        echo "order placed\n";
    }
}