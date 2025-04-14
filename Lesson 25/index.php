<?php

class Product
{
    private $name;
    private $price;
    private $quantity;

    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getCost()
    {
        return $this->price * $this->quantity;
    }
}


class Cart
{
    public $products = [];

    public function add($item)
    {
        $this->products[] = $item;
    }

    public function remove($item)
    {
        $newArr = [];
        $arr = $this->products;
        foreach ($arr as $v)
        {
            if ($v->getName() != $item)
            {
                $newArr[] = $v;
            }
        }
        $this->products = $newArr;
    }

    public function getTotalCost()
    {
        $c = 0;
        $arr = $this->products;
        foreach ($arr as $v)
        {
            $c += $v->getQuantity() * $v->getPrice();
        }
        return $c;
    }

    public function getTotalQuantity()
    {
        $c = 0;
        $arr = $this->products;
        foreach ($arr as $v)
        {
            $c += $v->getQuantity();
        }
    }

    public function getAvgPrice()
    {
        return $this->getTotalCost() / $this->getTotalQuantity();
    }
}