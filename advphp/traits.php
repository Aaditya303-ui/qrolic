<?php

// trait TraitA{
//     public function sayHello()
//     {
//         echo 'hello';
//     }
// }

// trait TraitB{
//     public function sayWorld()
//     {
//         echo 'world';
//     }
// }

// class myHelloWorld{
//     // same method collision TraitA::sayHello insteadof TraitB;
//     use TraitA,TraitB;
//     public function sayHelloWorld()
//     {
//         $this->sayHello();
//         echo " ";
//         $this->sayWorld();
//         echo "\n";
//     }
// }

// $myhello = new myHelloWorld();
// $myhello -> sayHelloWorld();

// class base{
//     public function sayHello(){
//         echo 'Hello';
//     }
// }

// trait sayWorld{
//     public function sayHello(){
//         parent::sayHello();
//         echo 'World';
//     }
// }

// class myHelloWorld extends Base{
//     use sayWorld;
// }

// $o = new myHelloWorld();
// $o -> sayHello();

// trait HelloWorld{
//     public function sayHello(){
//         echo 'Hello World!';
//     }
// }

// class TheWorldIsNotEnough{
//     use HelloWorld;
//     public function sayHello(){
//         echo 'Hello Universe';
//     }
// }

// $o = new TheWorldIsNotEnough();
// $o->sayHello();

// Multiple trait usage

// trait Hello{
//     public function sayHello(){
//         echo "Hello";
//     }
// }

// trait World{
//     public function sayWorld(){
//         echo "World";
//     }
// }

// class myHelloWorld{
//     use Hello,World;
//     public function exclam(){
//         echo '!';
//     }
// }

// $o = new myHelloWorld();
// $o -> sayHello();
// $o -> sayWorld();
// $o -> exclam();

// trait A{
//     public function smallTalk()
//     {
//         echo 'a';
//         return $this;
//     }

//     public function bigTalk()
//     {
//         echo 'A';
//         return $this;
//     }
// }

// trait B{
//     public function smallTalk()
//     {
//         echo 'b';
//         return $this;
//     }
//     public function bigTalk()
//     {
//         echo 'B';
//         return $this;
//     }
// }

// class Talker{
//     use A, B{
//         B::smallTalk insteadof A;
//         A::bigTalk insteadof B;
//     }
// }


// $s = new Talker();
// $s-> smallTalk()->bigTalk();


// trait Hello{
//     public function sayHello()
//     {
//         echo 'Hello ';
//     }
// }

// trait World{
//     public function sayWorld()
//     {
//         echo ' World!';
//     }
// }

// trait HelloWorld{
//     use Hello,World;
// }

// class myHelloWorld{
//     use HelloWorld;
// }

// $o = new myHelloWorld();
// $o-> sayHello();
// $o-> sayWorld();

// trait Counter{
//     public function inc()
//     {
//         static $c = 0;
//         $c = $c + 1;
//         echo $c;
//     }
// }

// class C1{
//     use Counter;
// }

// class C2{
//     use Counter;
// }

// $o = new C1();
// $o->inc();
// $b = new C2();
// $b->inc();
// $b->inc();

// Example #10 Static Methods

// trait StaticExample{
//     public static function doSomething()
//     {
//         return 'Doing something';
//     }
// }

// class Example
// {
//     use StaticExample;
// }

// echo Example::doSomething();

// trait T{
//     public static $counter = 1;
// }

// class A{
//     use T;

//     public static function incrementCounter()
//     {
//         static::$counter++;
//     }
// }

// class B extends A{
//     use T;
// }

// A::incrementCounter();  

// echo A::$counter;

// Example #11 Static Properties

trait T{
    public static $counter = 1;
}

class A
{
    use T;

    public static function incrementCounter()
    {
        static::$counter++;
    }
}

class B extends A{
    use T;
}

A::incrementCounter();

echo A::$counter;
echo B::$counter;