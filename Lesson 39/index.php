<?php

interface iCube
{
    public function __construct($a);
    public function getVolume();
    public function getArea();
}

class Cube implements iCube
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getVolume()
    {
        return pow($this->a, 3);
    }

    public function getArea()
    {
        return 6 * pow($this->a, 2);
    }
}


interface iUser
{
    public function __construct($name, $age);
    public function getName();
    public function getAge();
}

// class User implements iUser
// {
//     private $name;
//     private $age;

//     public function __construct($name, $age)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }

//     public function getName()
//     {
//         return $this->name;
//     }

//     public function getAge()
//     {
//         return $this->age;
//     }
// }
