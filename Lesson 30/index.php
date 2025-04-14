<?php

// class Num
// {
//     public static $num1 = 2;
//     public static $num2 = 3;

// }

// echo Num::$num1 + Num::$num2;

class Num
{
    private static $num1 = 2;
    private static $num2 = 3;

    public static function getSum()
    {
        return self::$num1 + self::$num2;
    }
}


class Geometry
{
    private static $pi = 3.14;

    public static function getCircleSquare($radius)
    {
        return self::$pi * $radius * $radius;
    }

    public static function getCircleСircuit($radius)
    {
        return 2 * self::$pi * $radius;
    }

    public static function getVolume($radius)
    {
        return 4 * self::$pi * pow($radius, 3) / 3;
    }
}

echo Geometry::getVolume(10);
