<?php

class Employee {
    public $name;
    public $age;
    public $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}

$e = new Employee('eric', 25, 1000);
$e2 = new Employee('kyle', 30, 2000);

echo $e->salary + $e2->salary;