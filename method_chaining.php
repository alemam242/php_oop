<?php
class abc
{
    function first()
    {
        echo "This is first function.<br>";
        return $this;
    }
    function second()
    {
        echo "This is second function.<br>";
        return $this;
    }
    function third()
    {
        echo "This is third function.<br>";
        return $this;
    }
}

$obj = new abc();

$obj->first();
$obj->second();
$obj->third();

// We can do the sane thing in 1 line 
$obj->first()->second()->third();
