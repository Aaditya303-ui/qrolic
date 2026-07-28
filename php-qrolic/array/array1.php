<?php

// array questions

// 1. Count Total Elements

// $products = [
//     "Laptop",
//     "Mobile",
//     "Tablet",
//     "Watch",
//     "Camera"
// ];

// $count = 0;

// for($i=0; $i<sizeof($products); $i++){
//     $count++;
// }

// echo $count;

// 2. Print All Elements

// $employees = [
//     "Aaditya",
//     "Virat",
//     "Dhoni",
//     "Rohit"
// ];

// foreach($employees as $e){
//     echo "$e <br>";
// }

// 3. Count Even Numbers

// $numbers = [10,15,20,25,30,35,40];
// $count = 0;

// for($i=0; $i<sizeof($numbers); $i++){
//     if(($numbers[$i] % 2) == 0){
//         $count++;
//     }
// }

// echo $count;

// 4. Sum All Numbers

// $sales = [1000,2500,3000,1200];
// $total = 0;

// for($i=0; $i<sizeof($sales); $i++){
//     $total = $total + $sales[$i];
// }

// echo $total;

// 6. Find Smallest Number

// $salaries = [25000,40000,35000,70000,50000];
// $min = PHP_INT_MAX;

// for($i=0; $i<sizeof($salaries); $i++){
//     if($salaries[$i] < $min){
//         $min = $salaries[$i];
//     }
// }

// echo $min;

// 7. Count Failed Students and pass students

// $marks = [20,45,78,30,90,15];

// $pass = 0;
// $fail = 0;

// foreach($marks as $m){
//     if($m < 35){
//         $fail++;
//     }else{
//         $pass++;
//     }
// }

// echo "Pass students count is $pass <br>";
// echo "Failed students count is $fail <br>";

// 9. Find Average Marks

// $marks = [50,60,70,80,90];

// $n = count($marks);
// $total = 0;

// foreach($marks as $m){
//     $total = $total + $m;
//     $avg = $total/$n;
// }

// echo $avg;

// 10. Find Second Highest Number

// $numbers = [20,90,45,70,85];

// $first_l = PHP_INT_MIN;
// $second_l = $first_l;

// for($i=0; $i<sizeof($numbers); $i++){
//     if($numbers[$i] > $first_l){
//         $first_l = $numbers[$i];
//         $second_l = $first_l;
//     }
// }
// echo "$first_l ";
// echo $second_l;

// 14. Internship-Level Final Challenge

// $transactions = [
//     100,
//     250,
//     0,
//     400,
//     500,
//     0,
//     750,
//     300
// ];

// $count = 0;
// $fail = 0;

// for($i=0; $i<sizeof($transactions); $i++){
//     if($transactions[$i] > 0){
//         $count ++;
//     }

//     if($transactions[$i] == 0){
//         $fail ++;
//     }
// }

// echo "Valid transactions are: $count <br>";
// echo "Failed transaction are: $fail <br>";



