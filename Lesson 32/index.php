<?php

class Circle
{
    const PI = 3.14; 
    private $radius; 

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    
    public function getSquare()
    {
        return self::PI * $this->radius * $this->radius;
        
    }

    
    public function getCircuit()
    {
        return 2 * self::PI * $this->radius;
        
    }
}

$c = new Circle(10);
echo $c->getCircuit();
echo ' ';
echo $c->getSquare();
