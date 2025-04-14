<?php

// class Employee
// {
//     public $name;
//     public $salary;

//     public function __construct($name, $salary)
//     {
//         $this->name = $name;
//         $this->salary = $salary;
//     }
// }

// class Student 
// {
//     public $name;
//     public $scholarship;

//     public function __construct($name, $scholarship)
//     {
//         $this->name = $name;
//         $this->scholarship = $scholarship;
//     }

// }

// $e1 = new Employee('Axror', 1000);
// $e2 = new Employee('Mirkomil', 2000);
// $e3 = new Employee('Asliddin', 3000);
// $s1 = new Student('Jamshid', 500);
// $s2 = new Student('Zafar', 1500);
// $s3 = new Student('Lochin', 2500);

// $arr = [$e1, $s1, $e2, $s2, $e3, $s3];

// foreach ($arr as $v)
// {
//     if ($v instanceof Employee)
//     {
//         echo $v->name . '<br/>';
//     }
// }


// foreach ($arr as $v)
// {
//     if ($v instanceof Student)
//     {
//         echo $v->name . '<br/>';
//     }
// }


// foreach ($arr as $v)
// {
//     $e = 0;
//     $s = 0;
//     if ($v instanceof Employee)
//     {
//         $e += $v->salary;
//     }
//     else
//     {
//         $s += $v->scholarship;
//     }
// }

// echo $e . ' ' . $s;

class User
{
    public $name;
    public $surname;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }
}

// class Employee extends User
// {
//     public $salary;

//     public function __construct($name, $surname, $salary)
//     {
//         $this->name = $name;
//         $this->surname = $surname;
//         $this->salary = $salary;
//     }
// }


class City
{
    public $name;
    public $population;

    public function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }
}

$u1 = new User('Axror', 'Hasanov');
$u2 = new User('Mirkomil', 'Toshmatov');
$u3 = new User('Asliddin', 'Sayidqulov');
$e1 = new Employee('Dilshod', 'Bobosherov', 1000);
$e2 = new Employee('Iroda', "Eshpo'latova", 1500);
$e3 = new Employee('Nasiba', 'Hasanova', 2000);
$c1 = new City('Samarkand', 10000);
$c2 = new City('Tashkent', 12000);
$c3 = new City('Jizzakh', 5000);

$arr = [$u1, $e1, $c1, $u2, $e2, $c2, $u3, $e3, $c3];

foreach ($arr as $v) {
    if ($v instanceof Employee) {
        echo $v->name . ' ';
    }
}

foreach ($arr as $v) {
    if (!($v instanceof Employee)) {
        echo $v->name . ' ';
    }
}

foreach ($arr as $v) {
    if ($v instanceof User) {
        echo $v->name . ' ';
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


class Student
{
    private $name;
    private $scholarship;

    public function __construct($name, $scholarship)
    {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getScholarship()
    {
        return $this->scholarship;
    }
}


class UsersCollection
{
    private $employees = [];
    private $students = [];

    public function add($user)
    {
        if ($user instanceof Employee) {
            $this->employees[] = $user;
        }

        if ($user instanceof Student) {
            $this->students[] = $user;
        }
    }

    public function getTotalSalary()
    {
        $sum = 0;

        foreach ($this->employees as $employee) {
            $sum += $employee->getSalary();
        }

        return $sum;
    }

    public function getTotalScholarship()
    {
        $sum = 0;

        foreach ($this->students as $student) {
            $sum += $student->getScholarship();
        }

        return $sum;
    }

    
    public function getTotalPayment()
    {
        return $this->getTotalScholarship() + $this->getTotalSalary();
    }
}
