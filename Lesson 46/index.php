<?php

trait Helper
{
    private $name;
    private $age;

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

class Country
{
    use Helper;
    private $population;

    public function getPopulation()
    {
        return $this->population;
    }
}

trait Trait1
{
    private function method1()
    {
        return 1;
    }
}

trait Trait2
{
    private function method2()
    {
        return 2;
    }
}

trait Trait3
{
    public function method3()
    {
        return 3;
    }
}


class Test
{
    use Trait1, Trait2, Trait3;

    public function getSum()
    {
        return $this->method1() + $this->method2() + $this->method3();
    }
}
