<?php

namespace App\DesignPatterns\Structural\Composit;

class Clinet
{
    public static function run()
    {
        $book = new Book('php book', 10.99);
        $gadget = new Gadget('headphone', 30.23);

        $catalog = new ProductCatalog();
        $catalog->addProduct($book);
        $catalog->addProduct($gadget);

        echo $catalog->getPrice();
        echo $catalog->getName();
    }
}