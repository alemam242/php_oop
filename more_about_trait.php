<?php
trait hello
{
    private function sayHello()
    {
        echo "Hello from hello trait private function<br>";
    }
}

trait hi
{
    function sayHello()
    {
        echo "Hello from hi trait<br>";
    }
}

class base
{
    // private trait to public transform
    use hello {
        hello::sayHello as public;
    }
}

class rename
{
    // rename the function in hi trait
    use hi {
        hi::sayHello as sayHi;
    }
}
class both
{
    use hi, hello {
        hi::sayHello insteadof hello; // Set priority of hello trait high
    }
}
class child extends base
{
    public function sayHello()
    {
        echo "Hello from child class<br>";
    }
}

$objBase = new base();
$objBase->sayHello();

$renameObj = new rename();
$renameObj->sayHi();

$childObj = new child();
$childObj->sayHello();

$objBoth = new both();
$objBoth->sayHello();
