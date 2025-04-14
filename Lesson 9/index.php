<?php

class Employee {
    private $name;
    private $surname;
    private $salary;

    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($newSalary) {
        $this->salary = $newSalary;
    }
}