<?php

class Ar
{
    private $numbers = []; 

    public function add($number)
    {
        $this->numbers[] = $number;
        return $this; 
    }

    public function push($numbers)
    {
        $this->numbers = array_merge($this->numbers, $numbers);
        return $this; 
    }

    public function getSum()
    {
        return array_sum($this->numbers);
    }
}


echo (new Ar)->add(1)->add(2)->push([3, 4])->getSum();