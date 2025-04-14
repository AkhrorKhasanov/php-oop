<?php

// class City {
//     public $name;
//     public $foundation;
//     public $population;

//     public function __construct($name, $foundation, $population)
//     {
//         $this->name = $name;
//         $this->foundation = $foundation;
//         $this->population = $population;
//     }
// }

// $c = new City('Samarkand', 1937, 1000);
// $props = ['name', 'foundation', 'population'];

// foreach ($props as $v) {
//     echo $c->$v . '<br/>';
// }


class User
{
    public $surname; 
    public $name; 
    public $patronymic; 

    public function __construct($surname, $name, $patronymic)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
    }
}

$props = ['surname', 'name', 'patronymic'];

$u = new User('Hasanov', 'Axror', "Shovxi o'g'li");

echo $u->{$props[0]};
echo $u->{$props[1]};
echo $u->{$props[2]};