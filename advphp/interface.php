<?php

// interface Animal{
//     public function makeSound();
// }

// class cat implements Animal{
//     public function makeSound()
//     {
//         echo "Meow";
//     }
// }

// class dog implements Animal{
//     public function makeSound()
//     {
//         echo "Woof woof";
//     }
// }

// $cat = new cat();
// $dog = new dog();

// $cat->makeSound();
// $dog->makeSound();

// interface Animal{
//     public function makeSound();
//     public function fromFamily();
// }

// class cat implements Animal{
//     public function makeSound()
//     {
//         echo "Sound: Meow";
//     }
//     public function fromFamily()
//     {
//         echo "From family: Felidae (Relatives: lions, tigers, jaguars, lynx, cougars, and cheetahs).<br>";
//     }
// }

// class dog implements Animal{
//     public function makeSound()
//     {
//         echo "Sound: Bow";
//     }
//     public function fromFamily()
//     {
//         echo "From family: Canidae (Relatives: wolves, foxes, coyotes, jackals, and domestic dogs).<br>";
//     }       
// }

// echo "<h3>Cat</h3>";
// $c = new cat();
// $c->makeSound();
// $c->fromFamily();

// echo "<h3>Dog</h3>";
// $d = new dog();
// $d->makeSound();
// $d->fromFamily();

// interface shape{
//     public function calculate();
// }

// class circle implements shape{
//     private $radius;

//     public function __construct($radius)
//     {
//         $this->radius = $radius;
//     }

//     function calculate()
//     {
//         return $this->radius*$this->radius;
//     }
// }

// class rectangle implements shape{
//     private $length,$width;

//     public function __construct($length,$width)
//     {
//         $this->length = $length;
//         $this->width = $width;
//     }

//     function calculate()
//     {
//         return $this->length*$this->width;
//     }
// }

// $c = new circle(4);
// echo $c->calculate();

// echo "<br>";

// $d = new rectangle(12,23);
// echo $d->calculate();

