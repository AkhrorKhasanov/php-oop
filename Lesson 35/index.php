<?php

abstract class User
{
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    abstract public function increaseRevenue($value);

    abstract public function decreaseRevenue($value);
}

class Employee extends User
{
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function increaseRevenue($value)
    {
        $this->salary = $this->salary + $value;
    }

    public function decreaseRevenue($value)
    {
        $this->salary = $this->salary - $value;
    }
}

class Student extends User
{
    private $scholarship;

    public function getScholarship()
    {
        return $this->scholarship;
    }

    public function setScholarship($scholarship)
    {
        $this->scholarship = $scholarship;
    }

    public function increaseRevenue($value)
    {
        $this->scholarship = $this->scholarship + $value;
    }

    public function decreaseRevenue($value)
    {
        $this->scholarship = $this->scholarship - $value;
    }
}


// abstract class Figure
// {
//     abstract public function getSquare();
//     abstract public function getPerimeter();
//     abstract public function getSquarePerimeterSum();
// }

class Rectangle extends Figure
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;     
    }

    public function getSquare()
    {
        return $this->a * $this->b;
    }

    public function getPerimeter()
    {
        return 2 * ($this->a + $this->b);
    }

    public function getSquarePerimeterSum()
    {
        return $this->getSquare() + $this->getPerimeter();
    }
}