<?php

class Arr
{
    private $numbers = []; 

    public function __construct($numbers)
    {
        $this->numbers = $numbers; 
    }

    
    public function add($number)
    {
        $this->numbers[] = $number;
    }

  
    public function getSum()
    {
        return array_sum($this->numbers);
    }
}

echo (new Arr([1, 2, 3]))->getSum() + (new Arr([4, 5, 6]))->getSum();