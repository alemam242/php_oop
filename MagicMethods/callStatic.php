<?php

/**
 * ? __callStatic() method auto call hobe jokhn
 * ? 1. private or non existing static method access korar try kora hobe outside class
 * ? 2. __callStatic() method er type o static dite hobe
 */

class abc
{
    private static function hello()
    {
        echo "Hello Everyone! This is a private static method.<br>";
    }

    public static function __callStatic($method, $args)
    {
        if (method_exists(__CLASS__, $method)) {
            call_user_func_array([__CLASS__, $method], $args);
        } else {
            echo "'$method' method is not exists!<br>";
        }
    }
}

abc::hello();
