<?php

class Post
{
    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }

}

$programmer = new Post('Programmer', 1000);
$manager = new Post('Manager', 2000);
$driver = new Post('Driver', 1500);


class Employee
{
    private $name;
    private $surname;
    private $post;

    public function __construct($name, $surname, Post $post)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->post = $post;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setSurname($newSurname)
    {
        $this->surname = $newSurname;
    }

    public function getPost()
    {
        return $this->post;
    }

    public function changePost(Post $post)
    {
        $this->post = $post;
    }
}

$e = new Employee('Axror', 'Hasanov', $programmer);
echo $e->getName() . ' ' . $e->getSurname() . ' ' . $e->getPost()->getName() . ' ' . $e->getPost()->getSalary();