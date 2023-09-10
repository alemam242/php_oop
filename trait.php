<?php
trait MyFunctions
{
    function greetings()
    {
        echo "Hello dear.<br>";
    }
}
trait Messages
{
    function message()
    {
        echo "Good Night!<br>";
    }
}

class A
{
    use MyFunctions, Messages;
}
class B
{
    use Messages;
}
class C
{
    use MyFunctions;
}

$obj1 = new A();
$obj2 = new B();
$obj3 = new C();

$obj1->greetings();
$obj1->message();

$obj2->message();

$obj3->greetings();
