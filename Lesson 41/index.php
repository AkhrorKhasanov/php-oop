<?php


// Tushunmadim. To'liq emas!!!



interface Figure3d
{
    public function getVolume();
    public function getSurfaceSquare();
}

interface Figure2d
{
    public function getSurface();
    public function getPerimeter();
    
}

class Cube implements Figure3d
{
    public $side;

    public function __construct($side)
    {
        $this->side = $side;
    }

    public function getVolume()
    {
        return pow($this->side, 3);
    }

    public function getSurfaceSquare()
    {
        return 6 * pow($this->side, 2);
    }
}

class Quadrate implements Figure2d
{
    public $side;

    public function getSurface()
    {
        return pow($this->side, 2);
    }

    public function getPerimeter()
    {
        return 4 * $this->side;
    }
}

class Rectangle implements Figure2d
{
    public $height;
    public $width;

    public function getSurface()
    {
        return $this->height * $this->width;
    }

    public function getPerimeter()
    {
        return 2 * ($this->height + $this->width);
    }

}

