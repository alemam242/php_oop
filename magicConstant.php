<?php

/**
 * *Here are four magic constants that can ne used any where in php file
 * * __LINE__
 * * __FILE__
 * * __DIR__
 * * __FUNCTION__
 * 
 * ?Here are four magic constants that can be used in OOP only
 * * __CLASS__
 * * __METHOD__
 * * __NAMESPACE__
 * * __TRAIT__
 */

namespace myNamespace;

trait myTrait
{
    function getTraitName()
    {
        echo "The trait name is: " . __TRAIT__ . "<br>";
    }
}
class myClass
{
    use myTrait;
    function getClassName()
    {
        echo "The class name is: " . __CLASS__ . "<br>";
    }

    function getMethodName()
    {
        echo "The method name is: " . __METHOD__ . "<br>";
    }
    function getNamespace()
    {
        echo "The Namespace is: " . __NAMESPACE__ . "<br>";
    }
}

function MyFunc()
{
    echo "The function name is: " . __FUNCTION__ . "<br>";
}

echo "Line no: " . __LINE__;
echo "<br>";
echo "Full file path is: " . __FILE__;
echo "<br>";
echo "Directory of the file is: " . __DIR__;
echo "<br>";
MyFunc();


$obj = new myClass();
$obj->getClassName();
$obj->getMethodName();
$obj->getTraitName();
$obj->getNamespace();
