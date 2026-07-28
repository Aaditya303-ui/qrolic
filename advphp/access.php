<?php

// public class

// class Demo {
//     public $name = "Aaditya";

//     public function showName()
//     {
//         return $this->name;
//     }
// }

// $n = new Demo();
// echo $n -> name;
// echo $n -> showName();

// private

// class myclass{
//     private $secret = "Top Secret";

//     private function getSecret()
//     {
//         return $this->secret;
//     }

//     public function revealSecret()
//     {
//         return $this->getSecret();
//     }
// }

// $obj = new myclass();

// echo $obj -> revealSecret();
// echo $obj -> getSecret();
// echo $obj -> secret;

class parentClass{
    protected $message = "Hello my name is this";

    protected function fetchClass()
    {
        return $this->message;
    }
}

class childClass extends parentClass{
    public function getMessage()
    {
        return $this->fetchClass();
    }
}

$c = new childClass();
echo $c -> getMessage();