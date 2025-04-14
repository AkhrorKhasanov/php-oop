<?php



// To'liq emas bu mavzu!!!




// class User
// {
//     protected $name;
//     protected $age;


//     public function __construct($name, $age)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }

//     public function getName()
//     {
//         return $this->name;
//     }

//     public function getAge()
//     {
//         return $this->age;
//     }
// }


// class Student extends User
// {
//     private $course;


//     public function __construct($name, $age, $course)
//     {

//         $this->name = $name;
//         $this->age = $age;


//         $this->course = $course;
//     }

//     public function getCourse()
//     {
//         return $this->course;
//     }
// }


class User
{
    private $name;
    private $surname;
    private $birthday;
    // public function __construct($name, $surname)
    // {
    //     $this->name = $name;
    //     $this->surname = $surname;
    // }

    public function __construct($name, $surname, $birthday)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = $birthday;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }
}