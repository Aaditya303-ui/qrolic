<?php 

// Question 1: Total Expenses

// $expenses = [500, 1200, 300, 700, 1000];
// $total = 0;

// for($i=0; $i<sizeof($expenses); $i++){
//     $total = $total + $expenses[$i];
// }

// echo $total;

// Question 2: Highest Marks
// $marks = [45, 78, 92, 67, 88];

// $large = PHP_INT_MIN;

// for($i=0; $i<sizeof($marks); $i++){
//     if($marks[$i] > $large){
//         $large = $marks[$i];
//     }
// }

// echo $large;

// Question 3: Lowest Temperature
// $temperatures = [35, 28, 40, 22, 31];

// $small = PHP_INT_MAX;

// foreach($temperatures as $t){
//     if($small > $t){
//         $small = $t;
//     }
// }

// echo $small;

// Question 4: Count Passed Students && Count Failed Students
// $marks = [35, 67, 82, 28, 91, 40];
// $size = sizeof($marks);

// $pass = 0;
// $fail = 0;

// foreach($marks as $m){
//     if($m >= 40){
//         $pass++;
//     }else{
//         $fail++;
//     }
// }

// echo $fail;

// Question 6: Search Product

// $products = [
//     "Laptop",
//     "Mouse",
//     "Keyboard",
//     "Monitor"
// ];

// foreach($products as $p){
//     if($p == "Keyboard"){
//         echo "Found";
//         break;
//     }else{
//         echo "Not Found";
//         break;
//     }
// }

// Question 7: Count Even Numbers

// $numbers = [10, 15, 20, 25, 30, 35];
// $even = 0;
// $odd = 0;

// foreach($numbers as $n){
//     if(($n % 2) == 0){
//         $even++;
//     }else{
//         $odd++;
//     }
// }

// echo $odd;

// Question 9: Find Largest Sale

// $sales = [5000, 12000, 7000, 25000, 9000];
// $large = PHP_INT_MIN;
// foreach($sales as $s){
//     if($s > $large){
//         $large = $s;
//     }
// }

// echo $s;

// Question 10: Average Marks

// $marks = [80, 70, 90, 60, 100];
// $n = count($marks);

// $total = 0;
// $avg = 0;

// foreach($marks as $m){
//     $total = $total + $m;
//     $avg = $total/$n;
// }

// echo $avg;

// Question 11: Employee Salary Report
// $salaries = [
//     25000,
//     40000,
//     18000,
//     50000,
//     32000
// ];

// $total = 0;
// $high = PHP_INT_MIN;
// $low = PHP_INT_MAX;

// foreach($salaries as $s){
//     $total = $total + $s;

//     if($s > $high){
//         $high = $s;
//     }

//     if($s<$low){
//         $low = $s;
//     }
// }

// echo "Total: $total <br>";
// echo "High: $high <br>";
// echo "Low: $low <br>";

// Question 14: Internship Final Boss
// $attendance = [
//     "P",
//     "A",
//     "P",
//     "P",
//     "A",
//     "P",
//     "P",
//     "A",
//     "P",
//     "P"
// ];

// $pcount = 0;
// $acount = 0;
// $n = count($attendance);
// $percentage = 0;

// foreach($attendance as $a){
//     if($a == "P"){
//         $pcount++;
//     }else{
//         $acount++;
//     }
//     $percentage = ($pcount/$n)*100;
// }
// echo "Present count: $pcount <br>";
// echo "Absent count: $acount <br>";
// echo "Percentage: $percentage <br>";

// CREATE (Add a Student)

// $students = [
//     "Rahul",
//     "Priya",
//     "Aaditya",
//     "Neha"
// ];

// echo $students[1];

// $students[] = "Karan";
// $students['0'] = 'admin';
// echo "<pre>";
// print_r($students);

// Question 1: Read Student Information

// $student = [
//     "name" => "Rahul",
//     "age" => 20,
//     "city" => "Rajkot"
// ];

// echo "Students: ". $student['name'];

// Question 2: Display User Profile

// $user = [
//     "username" => "aaditya",
//     "email" => "aaditya@gmail.com",
//     "role" => "Student"
// ];

// echo "User Name: ". $user['username'] . "<br>";
// echo "email: ". $user['email'] . "<br>";
// echo "role: ". $user['role'] . "<br>";

// Question 10: Mini CRUD Challenge

// $student = [
//     "name" => "Rahul",
//     "age" => 20,
//     "city" => "Rajkot"
// ];
