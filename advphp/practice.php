<?php

// class abc{
//     public $a;

//     function __construct()
//     {
//         // return $this->start();
//         // $this -> a = $a;
//     }
//     protected function start(){
//         // $a = 12;
//         // return $this->$a;
//         echo "start <br>";
//         return;
//     }
//     private function inc(){
//         // return $this->a+1;
//         echo "inc <br>";
//         return;
//     }

//     public function callinc(){
//         return $this-> inc();
//     }
// }

// class xyz extends abc{
//     function __construct()
//     {
//         $this -> start();
//         $this -> callinc();
//     }
// }

// $a = new xyz();

// trait A{
//     public function abc(){
//         echo "abc";
//     }
// }

// trait B{
//     public function xyz(){
//         echo "xyz";
//     }
// }

// class work{
//     use A,B;
// }

// $a = new work();
// $a -> abc();
// $b = new work();
// $b -> xyz();

// Interface Animal{
   
// }

// class dog implements Animal{
//     public function makeSound()
//     {
//         echo "bow bow";
//     }
// }

// class cat implements Animal{
//     public function makeSound()
//     {
//         echo "meow meow";
//     }
// }

// $dog = new dog();
// $dog -> makeSound();
// $cat = new cat();
// $cat -> makeSound();

// class employee{
//     public function __set($name,$value)
//     {
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

// $obj = new employee();
// $obj->myproperty = "Aaditya";
// echo $obj->myproperty;

// class buildQuery
// {
//     private $str = "";

//     function select($fields)
//     {
//         $this->str.= "$fields FROM";
//         return $this;
//     }

//     function table($table)
//     {
//         $this->str .= " $table";
//         return $this;
//     }

//     function where($where)
//     {
//         $this->str .= "Where $where";
//         return $this;
//     }

//     function returnQuery()
//     {
//         return $this->str; 
//     }
// }

// $n = new buildQuery();
// $len = $n -> select("Select")->table("work")->where("age > 21")->returnQuery();
// echo $len;

// class lsg{
//     function __call($name, $arguments)
//     {
//         $l = implode(" ",$arguments);
//         echo "$name: $l <br>";
//     }
// }

// $d = new lsg();
// $d-> work("abc");

// class work{
//     private $str = "";

//     function start($my)
//     {
//         $this->str .= "$my ";
//         return $this;
//     }

//     function intro($intro)
//     {
//         $this->str .= " $intro is";
//         return $this;
//     }

//     function is($name)
//     {
//         $this->str .= " $name";
//         return $this;
//     }

//     function Getintro()
//     {
//         return $this->str;
//     }
// }

// $t = new work();
// echo $t -> intro("My")->is("Aaditya")->Getintro();






















// class sqlBuilder{
//     private $str = "";

//     function select($columns){
//         $this->str .= "SELECT $columns";
//         return $this;
//     }

//     function table($table){
//         $this->str .= " FROM $table";
//         return $this;
//     }

//     function clauses($clau){
//         $this->str .= " $clau";
//         return $this;
//     }

//     function orderBy($order){
//         $this->str .= " $order";
//         return $this;
//     }

//     function ExecuteQuery(){
//         return $this->str;
//     }
// }

// $l = new sqlBuilder();
// $sql = $l -> select("*")->table("Work")->clauses("WHERE age > 21")->orderBy("ORDER BY DESC")->ExecuteQuery();
// echo $sql;


class abc{
    private $array = [];

    function __set($name, $value)
    {
        $this->array[$name] = $value;
    }

    function __get($name)
    {
        return $this->array[$name];
    }
}

$a = new abc();
echo $a ->name = "Aaditya";
echo $a->age = 22;
echo $a->city = "Rajkot";
