<?php

class Fruit{
    public $name;
    public $color;

    function __construct($name,$color)
    {
        $this -> name = $name;
        $this -> color = $color;
    }

    function get_details()
    {
        echo "Name: $this->name, color: $this->color <br>";
    }
}

$apple = new Fruit("Apple","red");
$apple -> get_details();

$banana = new Fruit("Banana","yellow");
$banana -> get_details();