<?php

/**
 * ? __toString() method auto call hobe jokhn
 * ? 1. kono class er object k direct print korar try korbo
 */

class abc
{
    public function __toString()
    {
        return "You can't print any object as a string of class : " . get_class($this);
    }
}

$obj = new abc();

echo $obj;
