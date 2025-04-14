<?php

class User
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$methods = ['method1' => 'getName', 'method2' => 'getAge'];

$u = new User('Axror', 28);

echo $u->{$methods['method1']}();
echo $u->{$methods['method2']}();