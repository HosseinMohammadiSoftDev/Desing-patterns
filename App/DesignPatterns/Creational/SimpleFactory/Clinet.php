<?php

namespace App\DesignPatterns\Creational\SimpleFactory;

class Clinet
{
    public function run()
    {
        $productProcessor = new PreductProcesser();

        $product = $productProcessor->createProduct('book', '504 Essential Words',
                                                    100_000, 'English Book');

        echo 'Name: ' . $product->getName() . PHP_EOL;
        echo 'Price: ' . $product->getPrice() . PHP_EOL;
        echo 'Description: ' . $product->getDescription() . PHP_EOL;

    }
}