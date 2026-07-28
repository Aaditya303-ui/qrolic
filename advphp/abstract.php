<?php

// abstract class base
// {
//     abstract function printdata();
//     function pr()
//     {
//         echo "Base class";
//     }
// }

// class Derived extends base
// {
//     function printdata()
//     {
//         echo "Dervied class";
//     }
// }

// $b1 = new Derived;
// $b1->printdata();

// $b1 = new base();
// $b1 -> pr();

// abstract class base{
//     function __construct()
//     {
//         echo "This is the abstract class constructor";
//     }

//     abstract function printdata();
// }

// class derived extends Base{
//     function __construct()
//     {
//         echo "\nDerived class constructor"; 
//     }
//     function printdata()
//     {
//         echo "\nDerived class printdata function"; 
//     }
// }

// $b1 = new derived();
// $b1->printdata();

// abstract class Car{
//     public $name;

//     public function __construct($name)
//     {
//         $this->name = $name;
//     }

//     abstract public function intro();
// }

// class Audi extends Car{
//     public function intro()
//     {
//         return "French extravagance! I'm a $this->name!";
//     }
// }

// class Citroen extends Car{
//     public function intro()
//     {
//         return "French extravagance! I'm a $this->name!";
//     }
// }

// $audi = new Audi("Audi");
// echo $audi->intro();
// echo "<br>";
// $citroen = new Citroen("Citroen");
// echo $citroen->intro();

// abstract class AbstractClass
// {
//     abstract protected function prefixName($name);
// }

// class Concrete extends AbstractClass
// {
//     public function prefixName($name,$seperator='.')
//     {
//         if($name == "pacman")
//         {
//             $prefix = "Mr";
//         }elseif($name == "pacwomen")
//         {
//             $prefix = "Mrs";
//         }else{
//             $prefix = "";
//         }
//         return "{$prefix}{$seperator} {$name}";
//     }
// }

// $class = new Concrete();
// echo $class->prefixName("Pacman");
// echo $class->prefixName("Pacwomen");

// abstract class base{
//     abstract function printdata();

//     function pr()
//     {
//         echo "Base class";
//     }
// }

// class derived extends base{

//     function printdata()
//     {
//         echo "Dervied class";
//     }
// }

// $b1 = new derived();
// $b1 -> printdata();

// Cant create instance of abstract class

abstract class base{
    function __construct()
    {
        echo "This is a abstract class";
    }
    abstract function printdata();
}

class derived extends base{

    function __construct()
    {
        return "Derived class constructor";
    }
    function printdata()
    {
        echo "Derived class is here<br>";
    }
}

$b1 = new derived();
$b1 -> printdata();