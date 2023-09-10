<?php
class person
{
    private $name;
    private $age;

    function __construct($nm, $ag)
    {
        $this->name = $nm;
        $this->age = $ag;
    }

    function info()
    {
        echo $this->name . '--' . $this->age;
    }
}

$obj = new person("Al Emam", 23);

$obj->info();
