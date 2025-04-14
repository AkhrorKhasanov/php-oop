<?php

class Employee {
    private $name;
    private $age;
    private $salary;

    public function getName() {
        return $this->name;
    }

    public function setName($newName) {
        $this->name = $newName;
    }

    public function getAge() {
        return $this->age;
    }

    // public function setAge($newAge) {
    //     $this->age = $newAge;
    // }

    public function setAge($newAge) {
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }

    // public function getSalary() {
    //     return $this->salary;
    // }

    public function getSalary() {
        return $this->salary . '$';
    }

    public function setSalary($newSalary) {
        $this->salary = $newSalary;
    }

    private function isAgeCorrect($age) {
        return $age >= 1 && $age <= 100;
    }
}