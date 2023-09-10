<?php
interface message1
{
    public function sayHello($name);
}

interface message2
{
    function sayBye();
}

class students implements message1, message2
{
    private $name;

    function __construct($name)
    {
        $this->name = $name;

        $this->sayHello($this->name);
    }

    function sayHello($name)
    {
        echo "Hello, " . "$name.";
    }
    function sayBye()
    {
        echo "Good Bye " . $this->name;
    }
}

$stud1 = new students("Al Emam");
$stud1->sayBye();
