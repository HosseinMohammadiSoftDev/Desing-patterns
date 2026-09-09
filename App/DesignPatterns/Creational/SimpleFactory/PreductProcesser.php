<?php

namespace App\DesignPatterns\Creational\SimpleFactory;

use http\Exception\InvalidArgumentException;

class PreductProcesser
{
    public function createProduct(
        string $type,
        string $name,
        float  $price,
        string $description
    ): Product {
        return match($type){
            'book'     => new Book($name, $price, $description),
            'digital'  => new Digital($name, $price, $description),
            'clothing' => new Clothing($name, $price, $description),
            default    => throw new InvalidArgumentException()
        };
    }
}