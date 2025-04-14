<?php

// class Employee {
//     public $name;
//     public $age;
//     public $salary;

//     public function getName() {
//         return $this->name;
//     }

//     public function getAge() {
//         return $this->age;
//     }

//     public function getSalary() {
//         return $this->salary;
//     }

//     public function checkAge() {
//         return $this->age > 18;
//     }

// }

// $e1 = new Employee;
// $e1->name = 'Ahror';
// $e1->age = 28;
// $e1->salary = 1000;

// $e2 = new Employee;
// $e2->name = 'Mirkomil';
// $e2->age = 27;
// $e2->salary = 2000;

// echo $e1->getSalary() + $e2->getSalary();


// class User {
//     public $name;
//     public $age;

//     // public function setAge($newAge) {
//     //     $this->age = $newAge;
//     // }

//     public function setAge($newAge) {
//         if ($this->age >= 18) {
//             $this->age = $newAge;
//         }
//     }
// }

// $u1 = new User;
// $u1->name = 'john';
// $u1->age = 25;
// $u1->setAge(30);


// class Employee {
//     public $name;
//     public $salary;

//     public function doubleSalary() {
//         $this->salary = 2 * $this->salary;
//     }
// }


class Rectangle {
    public $width;
    public $height;

    public function getSquare() {
        return $this->width * $this->height;
    }

    public function getPerimeter() {
        return 2 * ($this->width + $this->height);
    }
}
