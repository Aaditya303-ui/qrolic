<?php

// class Car{
//     public $brand, $model, $year;

//     function __construct($brand, $model, $year)
//     {
//         $this -> brand = $brand;
//         $this -> model = $model;
//         $this -> model = $year;
//     }

//     function displayInfo()
//     {
//         echo "$this->brand,$this->model,$this->year";
//     }
// }

// $car = new Car("Toyota","Corolla",2021);
// $car -> displayInfo();

// class car{
//     public $brand;

//     function __construct($brand)
//     {
//         $this -> brand = $brand;
//     }

//     function displayInfo()
//     {
//         echo "Car brand: $this->brand";
//     }
// }

// $mycar = new car("Toyota");
// $mycar -> displayInfo();

// class car{
//     public $brand;
//     public $model;

//     public function __construct($brand,$model)
//     {
//         $this -> brand = $brand;
//         $this -> model = $model;
//     }

//     public function display(){
//         echo "Car brand: $this->brand, Model: $this->model";
//     }
// }

// $mycar = new car("Toyota","Corolla");
// $mycar -> display();

// To check wheather this object belongs to specific class or not
// var_dump($mycar instanceof car);