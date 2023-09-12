<?php

/**
 * ? __get() method auto call hobe jokhn
 * ? 1. private or non existing property access korar try kora hobe
 */

class abc
{
    private $data = ["name" => "Md. Al Emam", "age" => 23, "country" => "Bangladesh"];
    private $name;
    function __construct()
    {
        $this->name = "Al Emam";
    }

    function __get($property)
    {
        if (array_key_exists($property, $this->data)) {
            return $this->data["$property"];
        } else {
            echo "You are trying to access non-existing property.<br>";
        }
    }
}

$obj = new abc();


echo $obj->aga;
