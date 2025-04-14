<?php

class Arr
{
    private $numbers = [];

    public function add($nums)
    {
        $this->numbers = array_merge($this->numbers, $nums);
    }

    public function getSum()
    {
        return array_sum($this->numbers);
    }

    public function getAvg()
    {
        return $this->getSum() / count($this->numbers);
    }
}
