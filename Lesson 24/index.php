<?php
class SumHelper
{

    public function getSum2($arr)
    {
        return $this->getSum($arr, 2);
    }


    public function getSum3($arr)
    {
        return $this->getSum($arr, 3);
    }


    private function getSum($arr, $power)
    {
        $sum = 0;

        foreach ($arr as $elem) {
            $sum += pow($elem, $power);
        }

        return $sum;
    }
}


class Arr
{
    private $nums = [];
    private $sumHelper;
    private $meanHelper;
    // public function __construct()
    // {
    //     $this->sumHelper = new SumHelper;
    // }

    public function __construct()
    {
        $this->sumHelper = new SumHelper;
        $this->meanHelper = new AvgHelper;
    }

    public function getAvgMeanSum()
    {
        $arr = $this->nums;
        return $this->meanHelper->getAvg($arr) + $this->meanHelper->getAvg($arr);
    }

    public function getSum23()
    {

        $nums = $this->nums;


        return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums);
    }

    public function add($number)
    {
        $this->nums[] = $number;
    }
}

class AvgHelper
{
    public $arr;

    // public function __construct($arr)
    // {
    //     $this->arr = $arr;
    // }

    public function getAvg($arr)
    {
        return array_sum($arr) / count($arr);
    }

    public function getMeanSquare($arr)
    {
        $c = 0;
        foreach ($arr as $v) {
            $c += pow($v, 2);
        }

        return pow($c / count($arr), 0.5);
    }
}
