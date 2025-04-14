<?php

class Product
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

}

$product1 = new Product('Apple', 15000);

$product2 = $product1;

$product2->name = 'Mirkomil';

echo $product1->name;