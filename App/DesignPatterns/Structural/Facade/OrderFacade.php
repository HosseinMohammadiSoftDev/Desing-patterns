<?php

namespace App\DesignPatterns\Structural\Facade;

class OrderFacade
{
    protected OrderVerification $orderVerification;
    protected PymentProcesser $processPyment;
    protected OrderFulFilment $fulFilment;

    public function __construct()
    {
        $this->orderVerification = new OrderVerification();
        $this->processPyment = new PymentProcesser();
        $this->fulFilment = new OrderFulFilment();
    }

    public function placeOrder(int $orderId, float $amount): bool
    {
        $verified = $this->orderVerification->verifyOrder($orderId);

        if (!$verified)
            return false;

        $paid = $this->processPyment->processPyment($amount);

        if (!$paid)
            return false;


        $fullfiled = $this->fulFilment->fulFillOrder($orderId);

        if (!$fullfiled)
            return false;

        return true;
    }
}