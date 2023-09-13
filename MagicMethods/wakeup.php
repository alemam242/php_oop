<?php

/**
 * ? __wakeup() is fully opposite of __sleep() method
 * ? 1. __wakeup() method auto call hoi jokhn Kono array k object a convert kori
 * ? 2. Array theke class er object a convert korar jonno use kora hoi unserialize() method
 */

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
    function __wakeup()
    {
        echo "This is wakeup method<br>";
    }
}

$obj = new xyz("Al ", "Emam");

$srl = serialize($obj); // It will call sleep() method then sleep method return two properties as an array
echo $srl;

$usrl = unserialize($srl);

print_r($usrl);
