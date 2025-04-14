<?php

class User
{
    private $name;
    private $age;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if (strlen($name) > 3) {
            $this->name = $name;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($age >= 18) {
            $this->age = $age;
        }
    }
}


class Student extends User
{
    private $course;

    public function setName($name)
    {
        if (strlen($name) < 10)
        {
            parent::setName($name);
        }
    }

    public function setAge($age)
    {
        
        if ($age <= 25) {
           
            parent::setAge($age); 
        }
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }
}
