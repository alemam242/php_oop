<?php

/**
 * ? __sleep() method auto call hobe jokhn
 * ? 1. Kono class er object k array te convert korbo
 * ? 2. Class er Object k array te convert korar jonno use kora hoi serialize() method
 * ? 3. sleep method theke kotogulo data amra access korte chai seta return kori
 */

class abc
{
    private $course = "PHP";
    private $firstName;
    private $lastName;

    function __construct($fn, $ln)
    {
        $this->firstName = $fn;
        $this->lastName = $ln;
    }
}

class xyz
{
    private $course = "PHP";
    private $firstName;
    private $lastName;

    function __construct($fn, $ln)
    {
        $this->firstName = $fn;
        $this->lastName = $ln;
    }

    function __sleep()
    {
        return array("firstName", "lastName");
    }
}


$obj = new abc("Al ", "Emam");

$res = serialize($obj); // Convert all properties data into array
echo $res;

echo "<br>";

$obj = new xyz("Al ", "Emam");

$res = serialize($obj); // It will call sleep() method then sleep method return two properties as an array
echo $res;
