<?php

// class Animal{
//     public $name;
//     public function eat()
//     {
//         echo "$this->name is eating<br>";
//     }
// }

// class dog extends Animal{
//     public function bark()
//     {
//         echo "$this->name is barking <br>";
//     }
// }

// $dog = new dog();
// $dog -> name = "Tommy";
// $dog -> eat();
// $dog -> bark();

// Single level Inheritance

// class A{
//     public function sayHello()
//     {
//         echo "Hello from A <br>";
//     }
// }

// class B extends A{
//     public function sayHi()
//     {
//         echo "Hi from B<br>";
//     }
// }

// $a = new A();
// $a->sayHello();

// $b = new B();
// $b-> sayHi();
// $b->sayHello();

// Multi level inheritance

// class A{
//     public function greet()
//     {
//         echo "Hello from A<br>";
//     }
// }

// class B extends A{
//     public function welcome()
//     {
//         echo "Welcome from B<br>";
//     }
// }

// class C extends B{
//     public function message() {
//         echo "Message from C<br>";
//     }
// }

// $objA = new A();
// $objA -> greet();

// $objB = new B();
// $objB -> greet();
// $objB -> welcome();

// $objC = new C();
// $objC -> greet();
// $objC -> welcome();
// $objC -> message();

// trait Logger{
//     public function log($msg)
//     {
//         echo "Log: $msg <br>";
//     }
// }

// trait Auth{
//     public function authenticate()
//     {
//         echo "User authenticated <br>";
//     }
// }

// class User{
//     use Logger, Auth;
// }

// $objuser = new User();
// $objuser->log("This is a log message");
// $objuser->authenticate();

// Hierarchical Inheritance

// class Animal{
//     public function eat()
//     {
//         echo "I am eating <br>";
//     }
// }

// class dog extends Animal{
//     public function bark()
//     {
//         echo "Bow bow...<br>";
//     }
// }

// class cat extends Animal{
//     public function meow()
//     {
//         echo "meow meow...<br>";
//     }
// }

// class lion extends Animal{
//     public function roar()
//     {
//         echo "roar...roar..<br>";
//     }
// }

// $dog = new dog();
// $dog -> eat();
// $dog -> bark();

// $cat = new cat();
// $cat -> eat();
// $cat -> meow();

// $lion = new lion();
// $lion -> eat();
// $lion -> roar();

