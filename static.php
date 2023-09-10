<?php
class student
{
    public static $name;

    function __construct($n)
    {
        self::$name = $n;

        self::info();
    }

    public static function info()
    {
        echo self::$name . '<br>';
    }
}

student::$name = "Al Emam";
student::info();

$st = new student("Suvo");
