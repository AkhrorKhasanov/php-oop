<?php

// class User {
//     public $name;
//     public $age;

//     public function show() {
//         return '!!!';
//     }
// }

// $user1 = new User;

// $user1->name = 'john';
// $user1->age = 25;

// echo $user1->show();


class User {
    public $name;
    public $age;

    public function show($str) {
        return $str . '!!!';
    }
}

$user2 = new User;

$user2->name = 'john';
$user2->age = 25;

echo $user2->show('hello');