<?php

// class Fruit{
//     public $name;
//     public $color;

//     function __construct($name,$color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }

//     function __destruct()
//     {
//         echo "Name: ".$this->name." Color: ".$this->color;
//     }
// }

// $apple = new Fruit('Apple','red');

// class gfg{
//     private $array = [];

//     function __set($name, $value)
//     {
//         $this->array[$name] = $value;
//     }

//     function __get($name)
//     {
//         if(array_key_exists($name,$this->array))
//         {
//             return $this->array[$name];
//         }
//     }

//     function __isset($name)
//     {
//         return isset($this->array[$name]);
//     }

//     function __unset($name)
//     {
//         unset($this->array[$name]);
//     }
// }

// $g = new gfg();
// $g->work = "Hello";
// echo $g->work;
// unset($g->work);

// echo var_dump(isset($g->work));

// class calculator{
//     static function __callStatic($name, $arg)
//     {

//         if($name == "add"){
//             return $arg[0] + $arg[1];
//         }

//         if($name == "subtract"){
//             return $arg[0] - $arg[1];
//         }

//         if($name == "multiply"){
//             return $arg[0] * $arg[1];
//         }
//     }
// }

// $c = new calculator();


// echo $c -> add(12,23);
// echo $c -> multiply(12,23);
// echo $c -> subtract(23,12);

// echo calculator::add(12,23);
echo calculator::subtract(23,34);