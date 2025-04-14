<?php

interface iTetragon
{
    public function getA();
    public function getB();
    public function getC();
    public function getD();
}

interface iFigure
{
    public function getPerimeter();
    public function getSurface();
}

interface iCircle
{
    public function getRadius();
    public function getDiameter();
}

class Rectangle implements iTetragon, iFigure
{
    private $a;
    private $b;
    private $c;
    private $d;

    public function __construct($a, $b, $c, $d)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->d = $d;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function getC()
    {
        return $this->c;
    }

    public function getD()
    {
        return $this->d;
    }

    public function getPerimeter()
    {
        return $this->a + $this->b + $this->c + $this->d;
    }

    public function getSurface()
    {
        return $this->a * $this->b;
    }
}

class Disk implements iFigure, iCircle
{
    private $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getDiameter()
    {
        return 2 * $this->radius;
    }

    public function getPerimeter()
    {
        return 6.28 * $this->radius;
    }

    public function getSurface()
    {
        return 3.14 * pow($this->radius, 2);
    }
}