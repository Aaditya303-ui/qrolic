<?php

// class myclass{
//     public function __set($name,$value)
//     {
//         echo "we are setting $name to $value<br>";
//         $this->$name = $value;
//     }

//     public function __get($name)
//     {
//         echo "Value of $name is ";
//         return $this->name;
//     }

//     public function __isset($name)
//     {
//         return isset($this->name);
//     }
// }

// $obj = new myclass();
// $obj->myproperty = "Hello World";

// echo "Retrieving value we get: ".$obj->myproperty;
// var_dump(isset($obj->myproperty));

// class myclass{
//     public function __call($name, $arguments)
//     {
//         echo "Calling object method $name with ".implode(" ",$arguments)."\n";
//     }

//     public static function __callStatic($name, $arguments)
//     {
//         echo "Calling object method $name with ".implode(" ",$arguments)."\n";
//     }
// }

// $obj = new myclass();

// $obj->mymethod("Hello World!");
// myclass::mymethod("Hello World!");

// __get: when we are fetching the properties

// class User{
//     private $name = "Aaditya";

//     public function __get($property)
//     {
//         return $this->$property;
//     }
// }

// $user = new User();
// echo $user->name;

// __set(): 

// class User{
//     private $name;

//     public function __set($name, $value)
//     {
//         return $this -> $name = $value;
//     }

//     public function show()
//     {
//         echo $this->name;
//     }
// }

// $user = new User();
// $user->name = "Rahul";
// $user->show();


// class User
// {
//     private $name = "Aaditya";

//     public function __isset($property)
//     {
//         return isset($this->$property);
//     }
// }

// $user = new User();

// var_dump(isset($user->name));

// class User{
//     private $name = "Aaditya";

//     public function __unset($property)
//     {
//         unset($this->$property);
//     }

//     public function show()
//     {
//         var_dump(isset($this->name));
//     }
// }

// $u = new User();
// unset($u->name);
// $u->show();

// class Test{
//     public function __call($name, $arguments)
//     {
//         echo "Method Name: $name<br>";
//         echo "Arguments: ";
//         print_r($arguments);
//     }
// }

// $obj = new Test();

// $obj -> hello("Aaditya");

// class Test{
//     public static function __callStatic($name,$arguments)
//     {
//         echo "Static Method: $name";
//     }
// }

// Test::hello();

// class User{
//     private $name;

//     function __set($property, $value)
//     {
//         return $this -> name = $value;
//     }

//     function __get($property)
//     {
//         return $this -> name;
//     }
// }

// $u = new User();
// echo $u->name = "Aaditya";

// class User{
//     private $name,$age,$city;

//     private $data = [];

//     function __set($property,$value)
//     {
//         if(property_exists($this,$value)){
//             $this->$property = $value;
//         }else{
//             $this->data[$property] = $value;
//         }
//     }

//     function __get($property)
//     {
//         return $this->$property;
//     }

//     function __isset($name)
//     {
//         return var_dump(isset($name));
//     }

//     function

// }

// $u = new User();
// echo $u->name = "Aaditya";
// echo $u->age = 21;
// echo $u->city = "Delhi";

// echo isset($u->city);

// class student{
//     private $data = [];

//     function __set($name,$value)
//     {
//         if($this->data[$name] > 0)
//         {
//             echo "Its invalid";
//         }else{
//             $this->data[$name] = $value;
//         }
//     }
    
//     function __get($name)
//     {
//         return $this->data[$name] ?? 'null';
//     }
// }

// $s = new student();

// echo $s->name = "Aaditya";
// echo $s->age = 21;
// echo $s->place = "Rajkot";

// echo $s->email;

// class User{
//     private $data = [];

//     public function __set($name, $value)
//     {
//         $this->data[$name] = $value;
//     }

//     public function __isset($name)
//     {
//         return isset($this->data[$name]);
//     }
// }

// $user = new User();

// $user->name = "Aaditya";

// class Product{
//     private $data = [];

//     function __set($name, $value)
//     {
//         $this->data[$name] = $value;
//     }

//     function __get($name)
//     {
//         return $this->data[$name];
//     }

//     function __isset($name)
//     {
//         return isset($this->data[$name]);
//     }

//     function __unset($name)
//     {
//         unset($this->data);
//     }
// }

// $d = new Product();
// $d->name = "Aaditya";
// $d->price = 60000;

// echo $d->name;
// unset($d->name);
// echo var_dump(isset($d->name));


// class Product{
//     private $array = [];

//     function __set($name, $value)
//     {
//         $this->array[$name] = $value;
//     }

//     function __get($name)
//     {
//         return $this->array[$name]; 
//     }
// }

// class student {
//     public function __call($name, $arguments)
//     {
//         echo "Method Name: $name<br>";
//         echo "Arguments: ".implode(" ",$arguments);
//     }
// }

// $s = new student();
// $s->myName("Aaditya");

// class greeting{
//     function __call($name, $arguments)
//     {
//         echo "$name ".implode(" ",$arguments);
//     }
// }

// $n = new greeting();
// $n -> hello("Aaditya");

// class Calculator{
//     function __call($name, $arguments)
//     {
//         if(count($arguments) < 2){

//         }
//         $num1 = $arguments[0];
//         $num2 = $arguments[1];

//         if($name == "sum"){
//             return $num1+$num2;
//         }elseif($name == "diff"){
//             return $num1-$num2;
//         }elseif($name == "product"){
//             return $num1*$num2;
//         }
//     }
// }

// $c = new Calculator();

// echo $c-> sum(12,23);

// class User{

//     function __call($name, $arguments)
//     {
//         echo "$name: ".implode(" ",$arguments);
//     }
// }

// $n = new User();
// $n -> Name("Abcd<br>");
// $n -> work("axy");

// class UserModel{
//     function __call($name, $arguments)
//     {
//         $q = implode(" ",$arguments);
//         echo "SELECT * FROM user WHERE $name = $q <br>";
//     }

//     function learn($where,$age)
//     {
//         echo "SELECT * FROM user WHERE $where age > $age";
//     }
// }

// $u = new UserModel();
// $u -> learn("where",21);
// $u-> where(21);

// class Student
// {
//     public static function __callStatic($name, $arguments)
//     {
//         echo "Static Method: $name <br>";
//         print_r($arguments);
//     }
// }

// Student::hello("Aaditya");\

// class work{
//     private $str = "";

//     function my(){
//         $this->str .= "My";
//         return $this;
//     }

//     function name($name){
//         $this->str .= " Name is $name";
//         return $this;
//     }

//     function callOut(){
//         return $this->str;
//     }
// }

// $l = new work();
// $work = $l ->my()->name("Aaditya")->callOut();

// echo $work;

class foo{

    function __set($name, $value)
    {
        $this->$name = $value;
    }

    function __get($property)
    {
        return $this->$property;
    }

    function __isset($name)
    {
        return isset($name);
    }
}

$d = new foo();
echo $d -> name = "Aaditya";
