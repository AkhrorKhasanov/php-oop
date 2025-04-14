<?php
// class User
// {
//     private $name;
//     private $age;

//     public function getName()
//     {
//         return $this->name;
//     }

//     public function setName($name)
//     {
//         $this->name = $name;
//     }

//     public function getAge()
//     {
//         return $this->age;
//     }

//     public function setAge($age)
//     {
//         $this->age = $age;
//     }
// }

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
}


// class Student extends User
// {
//     private $course; // курс

//     public function getCourse()
//     {
//         return $this->course;
//     }

//     public function setCourse($course)
//     {
//         $this->course = $course;
//     }
// }


class Programmer extends Employee
{
    private $langs;

    public function getLangs()
    {
        return $this->langs;
    }

    public function setLangs($arr)
    {
        $this->langs = $arr;
    }
}


class Driver extends Employee
{
    private $experience;
    private $category;

    public function getExperience()
    {
        return $this->experience;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setExperience($exp)
    {
        $this->experience = $exp;
    }

    public function setCategory($cat)
    {
        $this->category = $cat;
    }
}
