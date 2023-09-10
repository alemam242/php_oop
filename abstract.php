<?php

abstract class car
{
    protected $model;
    protected $price;
    abstract protected function info($color);
}

class Toyota extends car
{
    function __construct($mod, $pr)
    {
        $this->model = $mod;
        $this->price = $pr;
    }
    public function info($color)
    {
        echo 'Model: ' . $this->model . 'Color: ' . $color . 'Price: ' . $this->price;
    }
}


$obj = new Toyota("RBF1", "2088999");
$obj->info("Red");
