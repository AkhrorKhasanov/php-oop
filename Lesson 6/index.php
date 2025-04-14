<?php

// class User
// {
//     public $name;
//     public $age;


//     public function setAge($age)
//     {

//         if ($this->isAgeCorrect($age)) {
//             $this->age = $age;
//         }
//     }


//     public function addAge($years)
//     {
//         $newAge = $this->age + $years;


//         if ($this->isAgeCorrect($newAge)) {
//             $this->age = $newAge;
//         }
//     }


//     private function isAgeCorrect($age)
//     {
//         return $age >= 18 and $age <= 60;
//     }
// }

// $u = new User;

// // $u->isAgeCorrect(30);


class Student {
    public $name;
    public $course;

    // public function transferToNextCourse() {
    //     if ($this->course + 1 <= 5)
    //     $this->course = $this->course + 1;
    // }

    public function transferToNextCourse($course) {
        if ($this->isCourseCorrect($course)) {
            $this->course = $this->course + 1;
        }
    }

    private function isCourseCorrect($course) {
        return $course + 1 <= 5;
    }
}
