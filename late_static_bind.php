<?php
class teacher
{
    public static $name = "Teacher";

    public function info()
    {
        // echo self::$name;
        echo static::$name;
    }
}

class student2 extends teacher
{
    public static $name = "Student";
}

$st = new student2();
$st->info();
