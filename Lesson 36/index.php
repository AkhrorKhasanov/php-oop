<?php

interface Figure
{
    public function getSquare();
    public function getPerimeter();
}

class Disk implements Figure
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getSquare()
    {
        return 3.14 * pow($this->radius, 2);
    }

    public function getPerimeter()
    {
        return 6.28 * $this->radius;
    }
}