<?php

/**
 * ? __set() method is also same as get but eta call hoi, jokhn
 * ? 1. private or non existing property er moddhe value assign kori
 */

class abc
{
    private $data = ["name" => "Md. Al Emam", "age" => 23, "country" => "Bangladesh"];
    private $name;
    function __construct()
    {
        $this->name = "Al Emam";
    }

    function show()
    {
        echo $this->name . "<br>";
    }

    function __get($property)
    {
        if (array_key_exists($property, $this->data)) {
            return $this->data["$property"];
        } else {
            echo "You are trying to access non-existing property.<br>";
        }
    }

    function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        } else {
            echo "Property doesn't exists: $property<br>";
        }
    }
}

$obj = new abc();

$obj->name = "Emam";

$obj->show();

echo $obj->aga;
