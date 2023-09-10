<?php
class person1
{
    public $name;
    public $age;

    function info()
    {
        echo $this->name;
        echo $this->age;
    }
}


$obj = new person1();

$obj->name = "Al Emam";
$obj->age = 23;

$obj->info();
