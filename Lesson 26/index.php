<?php

// function compare($obj1, $obj2)
// {
//     return $obj1 == $obj2;
// }

// function compare($obj1, $obj2)
// {
//     return $obj1 === $obj2;
// }

function compare($obj1, $obj2)
{
    if ($obj1 === $obj2) {
        return 1;
    } elseif ($obj1 == $obj2) {
        return 0;
    } else {
        return -1;
    }
}


class Employee
{
    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}


class EmployeesCollection
{
    private $employees = [];


    // public function add($newEmployee)
    // {
    //     $this->employees[] = $newEmployee;
    // }

    public function add($newEmployee)
    {
        if (!in_array($newEmployee, $this->employees, false)) {
            $this->employees[] = $newEmployee;
        }
    }

    public function get()
    {
        return $this->employees;
    }
}
