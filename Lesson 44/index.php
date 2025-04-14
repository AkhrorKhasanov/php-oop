<?php

interface iSphere
{
    const PI = 3.14;
    public function __construct($radius);
    public function getVolume();
    public function getSquare();
}

class Sphere implements iSphere
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getVolume()
    {
        return 4 * self::PI * pow($this->radius, 3) / 3;
    }

    public function getSquare()
    {
        return 4 * self::PI * pow($this->radius, 2);
    }
}