<?php
// Normally only class methods can access it

class Person
{
    private $age = 25;

    private function fetchAge()
    {
        return "His age is :".$this->age;
    }

    // public function __call($name, $arguments)
    // {
    //     return $this->fetchAge();
    // }

    public function __get($name)
    {
        // return $this->fetchAge();
        return $this->age;
    }

    public function __set($age, $value)
    {
        $this->$age = $value;
    }
}

$p = new Person();
// $p -> age = 29;
echo $p->age;


// $reflection = new ReflectionClass($p);
// $method = $reflection->getMethod('FetchAge');
// $method->setAccessible(true);
// echo $method->invoke($p);