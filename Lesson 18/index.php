<?php

class ArraySumHelper
{
    
    public function getAvg1($arr) {
        return $this->getSum($arr, 1);
    }

    
    public function getAvg2($arr) {
        return $this->getSum($arr, 2);
    }

    
    public function getAvg3($arr) {
        return $this->getSum($arr, 3);
    }

    
    public function getAvg4($arr) {
        return $this->getSum($arr, 4);
    }

    
    private function getSum($arr, $power) {
        $c = 0;
        foreach ($arr as $v) {
            $c += pow($v, $power);
        }
        return $this->calcSqrt($c, $power);
    }

    
    private function calcSqrt($num, $power) {
        return pow($num, 1 / $power);
    }
}
