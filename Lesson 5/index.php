<?php

class User {
    public $name;
    public $age;

    public function isAgeCorrect($age) {
        return $age >= 18 && $age <= 60;
    }

    public function setAge($age) {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }

    public function addAge($years) {
        $newAge = $this->age + $years;
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }

    public function subAge($years) {
        $newAge = $this->age - $years;
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }
}

$user = new User;

$user->name = 'Ahror';
$user->age = 28;

$user->setAge(1);

$user->setAge(40);

$user->addAge(2);

$user->addAge(70);
