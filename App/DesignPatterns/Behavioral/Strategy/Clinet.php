<?php

namespace App\DesignPatterns\Behavioral\Strategy;

class Clinet
{
    public static function run()
    {
        // Create a shopping cart
        $cart = new ShoppingCart();

// Add items to the cart
        $item1 = new Item('Widget', 10.00);
        $item2 = new Item('Gadget', 5.00);
        $cart->addItem($item1);
        $cart->addItem($item2);


        if ($customer->isSilver()) {
            $cart->setDiscountStrategy(new SilverDiscount());
        } elseif ($customer->isGold()) {
            $cart->setDiscountStrategy(new GoldDiscount());
        } elseif ($customer->isPlatinum()) {
            $cart->setDiscountStrategy(new PlatinumDiscount());
        }

// Calculate total with discount
        $total = $cart->calculateTotal();
    }
}