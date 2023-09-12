<?php
require_once 'class1.php';
require_once 'class2.php';
require_once 'class3.php';

function wow()
{
    echo "Wow from both<br>";
}

use anything\v2\alemam as cls3; // Create a shortcut

$c1 = new first\Student();
$c2 = new second\Student();
$c3 = new anything\v2\alemam\Student();
$new_c3 = new cls3\Student();


wow();
first\wow();
