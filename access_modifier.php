<?php

/**
 * ?               Access Modifier Table
 *  ------------------------------------------------------
 * | Access    | self class | child class | outside class |
 *  ------------------------------------------------------
 * | public    |    ✅      |     ✅     |     ✅        |
 *  ------------------------------------------------------
 * | private   |    ✅      |     ❌     |     ❌        |
 *  ------------------------------------------------------
 * | protected |    ✅      |     ✅     |     ❌        |
 *  ------------------------------------------------------
 */

class employee
{
    protected $name;
    protected $age;

    function __construct($nm, $ag)
    {
        $this->name = $nm;
        $this->age = $ag;

        $this->info();
    }

    private function info()
    {
        echo $this->name . '--' . $this->age;
    }

    protected function sayHello()
    {
        echo "Hello " . $this->name;
    }
}

class manager extends employee
{
    private $salary;
    function __construct($nm, $ag, $sl)
    {
        $this->name = $nm;
        $this->age = $ag;
        $this->salary = $sl;
    }

    function details()
    {
        $this->sayHello();

        echo $this->age . '--' . $this->salary;
    }
}

$obj = new manager("Al Emam", 23, 10000);
$obj->details();
