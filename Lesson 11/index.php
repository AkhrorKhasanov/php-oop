<?php

class City {
    public $name;
    public $population;

    public function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }

}

$c1 = new City('Samarkand', 1000);
$c2 = new City('Tashkent', 2000);
$c3 = new City('New-York', 3000);
$c4 = new City('Moscow', 4000);
$c5 = new City('London', 5000);

$arr = [$c1, $c2, $c3, $c4, $c5];

for ($i = 0; $i < 5; $i++) {
    echo $arr[$i]->name . ' ' . $arr[$i]->population . '<br/>';
}
