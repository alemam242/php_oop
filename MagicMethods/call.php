<?php

/**
 * ? __call() method auto call hobe jokhn
 * ? 1. private or non existing method access korar try kora hobe
 */

class abc
{
    private $name;
    private function setName($nm)
    {
        $this->name = $nm;
    }

    function __call($method, $args)
    {
        if (method_exists($this, $method)) {
            call_user_func_array([$this, $method], $args);
        } else {
            echo "Private or non existing property: $method<br>";
            // print_r($args);
        }
    }
}

$obj = new abc();


$obj->setName("Al Emam");

echo "<pre>";
print_r($obj);
echo "</pre>";
