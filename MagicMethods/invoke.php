<?php

/**
 * ? __invoke() method will auto call when we use an object as a function
 */

class wxyz
{
    function sum($a, $b)
    {
        return $a + $b;
    }

    function __invoke()
    {
        echo "Can't use object as function.<br>";
    }
}

$obj = new wxyz();

echo $obj->sum(10, 20);

$obj();
