<?php

/**
 * ? Autoload function use kore dynamically class k current file er sathe include kore nite pari
 * ? Jokhn e kono class er object banabo tokhn e automatically autoload method oi class er file ta include kore dibe
 * ? ** file name and class name must be same
 */

spl_autoload_register(function ($class_name) {
    include "classes/" . $class_name . ".php";
});


$obj1 = new first();
