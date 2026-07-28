<?php

// class and object

// Question 1 - Create your first object

// class employee{

//     public $name,$department;

//     function __construct($name,$department)
//     {
//         $this -> name = $name;
//         $this -> department = $department;
//     }

//     function displayInfo()
//     {
//         echo "Name: $this->name Department: $this->department <br>";
//     }
// }

// Question 2 - Multiple Objects

// $emp = new employee("Aaditya","IT");
// $emp -> displayInfo();
// $emp1 = new employee("Rahul","HR");
// $emp1 -> displayInfo();
// $emp2 = new employee("Priya","Testing");
// $emp2 -> displayInfo();

// Question 3 - Understanding $this

// class student{
//     public $name,$age,$course;

//     function setData($name,$age){
//         $name = $name;
//         $age = $age;
//     }

//     function showData()
//     {
//         echo "Name: $this->name <br> Age: $this->age";
//     }
// }

// $s = new student();
// $s -> setData("Aaditya",21);
// $s -> showData();

// Question 5 - Banking System

// class bankAccount
// {
//     public $accountholder, $balance;

//     function __construct($accountholder, $balance = 0)
//     {
//         $this->accountholder = $accountholder;
//         $this->balance = $balance;
//     }

//     public function deposit($amount)
//     {
//         if ($amount > 0) {
//             $this->balance += $amount;
//         }
//     }

//     public function withdraw($amount)
//     {
//         if ($amount <= $this->balance) {
//             $this->balance -= $amount;
//             return true;
//         }
//         return false;
//     }

//     public function showbalance()
//     {
//         echo "Account Holder: ".$this->accountholder." <br>";
//         echo "Balance: ".$this->balance." <br>";
//     }
// }

// $myaccount = new bankAccount("John Doe",0);
// $myaccount -> deposit(5000);
// $myaccount -> withdraw(2000);
// $myaccount -> showbalance();

// Question 6 - Online Shopping Cart

// class cart{
//     public $productName, $price, $quantity,$total;

//     function __construct($productName,$price,$quantity)
//     {
//         $this -> productName = $productName;
//         $this -> price = $price;
//         $this -> quantity = $quantity;
//     }

//     function calculateTotal()
//     {
//         $this->total = $this->quantity * $this->price;
//     }

//     function showCart()
//     {
//         echo "$this->productName <br>";
//         echo "Price: $this->price <br>";
//         echo "Quantity: $this->quantity <br>";
//         echo "Total: $this->total <br>";
//     }
// }

// $c = new cart("Laptop","50000",2);
// $c -> calculateTotal();
// $c -> showCart();

// Question 7 - Can one object affect another?

// class car{
//     public $brand,$speed;

//     function __construct($brand,$speed)
//     {
//         $this->brand = $brand;
//         $this->speed = $speed;
//     }

//     function speedup()
//     {
//         $this->speed = $this->speed + 20;
//     }

//     function displayInfo()
//     {
//         echo "$this->brand and its speed is $this->speed <br>";
//     }
// }

// $c1 = new car("car1",80);
// $c1 -> speedup();
// $c1 -> speedup();
// $c1 -> displayInfo();

// $c2 = new car("car2",100);
// $c2 -> speedup();
// $c2 -> displayInfo();

// Question 8 - Employee Salary Update

// class employee{
//     public $name, $salary;

//     function __construct($name,$salary)
//     {
//         $this -> name = $name;
//         $this -> salary = $salary;
//     }

//     function increaseSalary($amount)
//     {
//         $this->salary += $amount;
//     }

//     function showSalary()
//     {
//         echo "Name: $this->name <br> Salary: $this->salary";
//     }
// }

// $emp = new employee("Aaditya",10000);
// $emp -> increaseSalary(5000);
// $emp -> showSalary();

// Question 9 - Login System

// class user{
//     public $email, $password;

//     function __construct($email,$password)
//     {
//         $this->email = $email;
//         $this->password = $password;
//     }

//     function login($emailinput,$passwordinput)
//     {
//         if($this->email == $emailinput && $this->password == $passwordinput)
//         {
//             echo "Login successful welcome $this->email";
//         }else{
//             echo "Invalid $this->password";
//         }
//     }
// }

// $u = new user("aj@gmail.com","abcd");
// $u -> login("aj@gmail.com","abcd");

// Question 10 - Mini Freelancer Profile (Real Internship Scenario)

// class freelance{
//     public $name, $skills, $hourlyrate, $projectCompleted;

//     function __construct($name,$skills,$hourlyrate,$projectCompleted = 0)
//     {
//         $this->name = $name;
//         $this->skills = $skills;
//         $this->hourlyrate = $hourlyrate;
//         $this->projectCompleted = $projectCompleted;
//     }

//     function showProfile()
//     {
//         echo "Name: $this->name <br>";
//         echo "Skills: $this->skills <br>";
//         echo "Hourly rate: $this->hourlyrate <br>";
//         echo "Project Completed: $this->projectCompleted <br>";
//     }

//     function completeProject()
//     {
//         $this->projectCompleted++;
//     }
// }

// $f = new freelance("Aaditya","wordpress, php",600);

// $f -> showProfile()
//    -> completeProject()
//    -> showProfile();


// class student
// {
//     public $name, $age, $course;

//     function setName($name)
//     {
//         $this->name = $name;
//         return $this;
//     }

//     function setAge($age)
//     {
//         $this->age = $age;
//         return $this;
//     }

//     function setCourse($course)
//     {
//         $this->course = $course;
//         return $this;
//     }

//     function showProfile()
//     {
//         echo "Name: $this->name <br>";
//         echo "Name: $this->age <br>";
//         echo "Name: $this->course <br>";
//         return $this;
//     }
// }

// $s = new student();

// $s  -> setName("Aaditya")
//     -> setAge(21)
//     -> setCourse("B.Tech")
//     -> showProfile();

// Question 2 — Online Shopping Cart (Very Common)

// class cart{
//     public $productName, $price, $quantity;

//     function addProduct($productName)
//     {
//         $this -> productName = $productName;
//         return $this;
//     }

//     function setPrice($price = 0)
//     {
//         $this -> price = $price;
//         return $this;
//     }

//     function setQuantity($quantity)
//     {
//         $this -> quantity = $quantity;
//         return $this;
//     }

//     function calculateTotal()
//     {
//         echo "Name: ".$this->productName."<br>";
//         echo "Price: ".$this->price."<br>";
//         echo "Quantity: ".$this->quantity."<br>";
//         echo "Total: ".$this->price*$this->quantity."<br>";
//     }
// }

// $c = new cart();

// $c  -> addProduct("Laptop")
//     -> setPrice(50000)
//     -> setQuantity(3)
//     -> calculateTotal();

// class employee{
//     public $name, $department, $clockIn, $clockOut;

//     function setName($name){
//         $this -> name = $name;
//         return $this;
//     }

//     function setDepartment($department)
//     {
//         $this -> department = $department;
//         return $this;
//     }

//     function clockIn($clockIn)
//     {
//         $this -> clockIn = $clockIn;
//         return $this;
//     }

//     function clockOut($clockOut)
//     {
//         $this -> $clockOut = $clockOut;
//     }

//     function showAttendance()
//     {
//         echo "Name: $this->name <br>";
//         echo "Department: $this->department <br>";
//         echo "ClockIn: $this->clockIn <br>";
//         echo "ClockOut: $this->clockOut <br>";
//     }
// }

// $e = new employee();


// Inheritance

// class Animal{
//     function eat(){
//         echo "I am eating <br>";
//     }

//     function sleep(){
//         echo "I am sleeping<br>";
//     }
// }

// class dog extends Animal{
//     function bark(){
//         echo "bow bow...<br>";
//     }
// }

// $dog = new dog();
// $dog->eat();
// $dog->sleep();
// $dog->bark();

// Question 2 – Employee System

// class Employee
// {
//     public $name, $salary;

//     public function setEmployee($name, $salary)
//     {
//         $this->name = $name;
//         $this->salary = $salary;
//     }

//     public function showEmployee()
//     {
//         echo "Name: $this->name <br>";
//         echo "Salary: $this->salary <br>";
//     }
// }

// class developer extends Employee
// {
//    public function writeCode() {
//         echo "Task          : Writing code and building backend APIs...\n";
//     }
// }

// $dev = new developer();
// $dev -> setEmployee("Rahul",75000);
// $dev->showEmployee();
// $dev->writeCode();

// class vehicle{
//     function start(){
//         echo "started....<br>";
//     }

//     function stop(){
//         echo "stop....<br>";
//     }
// }

// class bike extends vehicle{
//     function ride(){
//         echo "Vroom vroom....<br>";
//     }
// }

// $bike = new bike();
// $bike -> start();
// $bike -> stop();
// $bike -> ride();

// Question 4 – College System

// class Principal{
//     function manageCollege(){
//         echo "Hello i am managing college<br>";
//     }
// }

// class teacher extends Principal{
//     function teach(){
//         echo "They teaches us and we work there <br>";
//     }
// }

// class student extends teacher{
//     function study(){
//         echo "I am studying here <br>";
//     }
// }

// $principal = new Principal();
// $principal -> manageCollege();

// $teacher = new teacher();
// $teacher -> manageCollege();
// $teacher -> teach();

// $student = new student();
// $student -> teach();
// $student -> manageCollege();
// $student -> study();

// Traits

// trait logger{
//     function log()
//     {
//         echo "Actively Logged";
//     }
// }

// class User{
//     use logger;
// }

// class Product{
//     use logger;
// }

// $user = new User();
// $user -> log();

// $product = new Product();
// $product -> log();

// Question 2 – Trait + Properties

// trait Counter{
//     public $count = 0;

//     function increment()
//     {
//         $this->count++;
//     }

//     function showCount()
//     {
//         echo $this->count;
//     }
// }

// class Tracker{
//     use Counter;
// }

// $obj = new Tracker();

// $obj -> increment();
// $obj -> increment();
// $obj -> showCount();

// Question 3 – Trait + Method Chaining

// trait calculator{
//     public $total = 0;

//     function add($num)
//     {
//         $this->total += $num;
//         return $this;
//     }

//     function subtract($num)
//     {
//         $this->total -= $num;
//         return $this;
//     }

//     function show()
//     {
//         return $this->total;
//     }
// }

// class maths{
//     use calculator;
// }

// $m = new maths();
// echo $m -> add(20)->subtract(5)->show();

// Question 4 – Multiple Traits

// trait Logger{
//     function log()
//     {
//         echo "Log created";
//     }
// }

// trait NotiFication{
//     function notify()
//     {
//         echo "Notification sent";
//     }
// }

// class Order{
//     use Logger,NotiFication;
// }

// $order = new Order();
// $order->log();
// $order->notify();

// Question 5 – Trait + Parent Class (Real Interview)

// class Employee{
//     function login()
//     {
//         echo "Employee Logged In";
//     }
// }

// trait Activity{
//     function login()
//     {
//         parent::login();
//     }
// }

// class Developer extends Employee{
//     use Activity;
// }

// $dev = new Developer();
// $dev -> login();

// abstract

// abstract class animal{
//     public $name;
//     public function __construct($name)
//     {
//         $this->name = $name;
//     }

//     public function sleep()
//     {
//         echo $this->name. " is sleeping\n";
//     }

//     abstract public function sound();
// }

// class dog extends animal{
//     public function sound()
//     {
//         echo "Dog barking\n";
//     }
// }

// class cat extends animal{
//     public function sound()
//     {
//         echo "Meow Meow\n";
//     }
// }

// $dog = new dog("Animal");
// $dog->sleep();
// $dog->sound();

// abstract class Account{
//     protected $balance;

//     function __construct($balance)
//     {
//         return $this->balance = $balance;
//     }

//     public function showbalance()
//     {
//         return $this->balance." is balance";
//     }

//     abstract public function deposit($amount);
//     abstract public function withdraw($amount);
// }

// class SavingsAccount extends Account{
//     public function deposit($amount)
//     {
//         $this->balance = $this->balance + $amount;    
//     }

//     public function withdraw($amount)
//     {
//         $this->balance = $this->balance - $amount;    
//     }
// }

// $acc = new SavingsAccount(3000);
// echo $acc -> showbalance();
// $acc -> deposit(2000);
// echo $acc -> showbalance();
// $acc -> withdraw(1000);
// echo $acc -> showbalance();

// abstract class employee{
//     public function login(){
//         "employee login <br>";
//     }
//     public function logout(){
//         "employee logout <br>";
//     }

//     abstract public function work();
// }

// class Developer extends employee{

//     public function work()
//     {
//         echo "Developer in work\n";
//     }
// }

// class Designer extends employee{
//     public function work()
//     {
//         echo "Designer in work\n";
//     }
// }

// class Tester extends employee{
//     public function work()
//     {
//         echo "Tester in work\n";
//     }
// }

// $dev = new Developer();
// $dev -> login();
// $dev->work();

// abstract class person{
//     protected $name,$email;

//     function __construct($name,$email)
//     {
//         $this->name = $name;
//         $this->email = $email;   
//     }

//     function showDetails()
//     {
//         echo "Name: $this->name<br> Email: $this->email<br>";
//     }

//     abstract function profession(); 
// }

// class Doctor extends person{
//     public function profession()
//     {
//         parent::__construct();
//         echo "I am doctor";
//     }
// }

// $doc = new Doctor("rahul",25);
// $doc->showDetails();
// $doc->profession();

// abstract class paymentGateway{
//     function paymentStarted(){
//         echo "Payment Started <br>";
//     }
//     abstract function pay($amount);
//     abstract function refund($amount);
// }

// class upi extends paymentGateway{
//     public function pay($amount)
//     {
//         return "$amount is been paid <br>";
//     }
//     public function refund($amount)
//     {
//         return "$amount is refunded<br>";
//     }
// }

// $upi = new upi();
// $upi->paymentStarted();
// echo $upi->pay(2000);
// echo $upi->refund(500);

// abstract class User{
//     protected $id,$name,$email;

//     function __construct($id,$name,$email)
//     {
//         $this->id = $id;
//         $this->name = $name;
//         $this->email = $email;
//     }

//     function login(){
//         return "Welcome $this->name ! <br>";   
//     }
//     function logout(){
//         return "Logout id: $this->id<br>";   
//     }

//     abstract function dashboard();
// }

// class Client extends User{
//     function dashboard(){
//         return "Id: $this->id <br>Name: $this->name<br> Email: $this->email<br>";
//     }
// }

// $c = new Client(1,"Aaditya","aj@gmail.com");
// echo $c -> login();
// echo $c -> dashboard();
// echo $c -> logout();

// Interface

// interface Animal{
//     public function makeSound();
//     public function eat();
// }

// class dog implements Animal{
//     public function makeSound()
//     {
//         echo "bow bow<br>";
//     }
//     public function eat()
//     {
//         echo "dog eats";
//     }
// }

// $an = new dog();
// $an -> makeSound();
// $an -> eat();

// Question 2 - Payment Gateway

// interface paymentGateway{
//     public function pay($amount);
//     public function refund($amount);
// }

// class upi implements paymentGateway{
//     public function pay($amount){
//         return "Amount paid: $amount<br>";
//     }
//     public function refund($amount){
//         return "Amount refunded: $amount<br>";
//     }
// }

// $u = new upi();
// echo $u->pay(2000);
// echo $u->refund(500);

// overloading

// class Employee{
//     private $name;

//     function __construct($name)
//     {
//         $this->name = $name;
//     }

//     function __get($name)
//     {
//         return $this->name;
//     }
// }

// $emp = new Employee("Aaditya");
// echo $emp->name;

// class student{

//     function __set($property, $value)
//     {
//         return $this->$property = $value;
//     }

//     function __get($property)
//     {
//         return $this->$property;
//     }
// }

// $student = new Student();

// $student->name = "Aaditya";

// $student->age = 22;

// echo $student->name;

// echo "<br>";

// echo $student->age;

// class User{
//     private $email;

//     public function __construct($email)
//     {
//         $this->email = $email;
//     }

//     public function __isset($property)
//     {
//         return isset($this->$property);
//     }

//     public function unset($property)
//     {
//         unset($this->$property);
//     }
// }

// $user = new User("Aj@gmail.com");

// var_dump(isset($user->email));
// unset($user->email);

// var_dump(isset($user->email));

// class calculator{
//     public function __call($method, $arguments)
//     {
//         if($method == "add"){
//             return array_sum($arguments);
//         }

//         if($method == "multiply"){
//             return array_product($arguments);
//         }
//     }
// }

// $calc = new calculator();
// echo $calc -> add(10,20);
// echo $calc -> multiply(20,20);

// class math{
//     public static function __callStatic($method,$arguments){

//         if($method == "cube"){
//             $nums = $arguments[0];
//             return $nums*$nums*$nums;
//         }

//         if($method == "square"){
//             $nums = $arguments[0];
//             return $nums*$nums;
//         }
//     }
// }

// echo math::cube(10);

// class product{
//     private $name, $price, $stock;

//     public __set($name,$value){

//     }
// }

// class Animal{
//     public function sound(){
//         echo "Animal makes sound";
//     }
// }

// class dog extends Animal{
//     public function sound(){
//         echo "bow bow";
//     }
// }

// $d = new dog();
// $d->sound();

class gfg
{
    private $userid;
    private $pwd;


    private function updatepwd($userid, $pwd)
    {
        echo "User: " . $userid . " | Password updated to: " . $pwd . "\n";   
    }

    public function courseName($userid, $pwd) {
        $this->updatepwd($userid, $pwd);
    }
}


$obj = new gfg();

$obj->courseName("Aaditya", "abcd"); 

public function xyz($name){
    
}