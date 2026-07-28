<?php

// 1. Print 1 to 100

// for($i = 1; $i <= 100; $i++){
//     echo "$i <br>";
// }

// 2. Print Even Numbers

// for($i = 1; $i <= 100; $i++){
//     if(($i % 2) == 0){
//         echo "$i <br>";
//     }
// }

// 3. Print Odd Numbers

// for($i = 1; $i <= 100; $i++){
//     if(($i % 2) != 0){
//         echo "$i <br>";
//     }
// }

// 4. Reverse Counting

// for($i = 100; $i >= 1; $i--){
//     echo "$i <br>";
// }

// 5. Multiplication Table

// $num = 7;

// for($i = 1; $i <= 10; $i++){
//     $prod = $i*$num;
//     echo "7 x $i = $prod <br>";
// }

// 6. Skip Multiples of 3

// for($i = 1; $i <= 50; $i++){
//     if(($i % 3) == 0){
//         continue;
//     }
//     echo "$i <br>";
// }

// 7. Print Numbers Divisible by Both 4 and 6

// for($i=1; $i<=200; $i++){
//     if(($i % 4) == 0 && ($i % 6) == 0){
//         echo "$i <br>";
//     }
// }

// 8. Count Even Numbers

// $count = 0;

// for($i=1; $i<=100; $i++){
//     if(($i % 2) == 0){
//         $count++;
//     }
// }

// echo "Total Even Numbers = $count";

// 9. Sum Only Odd Numbers

// $sum = 0;

// for($i=1; $i<=100; $i++){
//     if(($i % 2) != 0){
//         $sum = $sum + $i;
//     }
// }

// echo $sum;

// 10. Sum Numbers Except Multiples of 5

// $sum = 0;
// for($i=1; $i<=100; $i++){
//     if(($i % 5) == 0){
//         continue;
//     }
//     $sum = $sum + $i;
// }

// echo $sum;

// 11. Employee Validation

// $count = 0;
// for($i = 1; $i <= 100; $i++){
//     if(($i % 4) == 0 || ($i % 7) == 0){
//         continue;
//     }
//     $count++;
// }

// echo $count;

// 12. User Registration Check

// Invalid if:
// ends with 5
// divisible by 9

// $count = 0;

// for($i=1; $i<=150; $i++){
//     if(($i % 9) == 0 || ($i % 10) == 5){
//         continue;
//     }
//     $count++;
// }

// echo $count;

// 13. Transaction Processing

// $count = 0;

// for($i=1000; $i<=1100; $i++){
//     if(($i % 4) == 0 || ($i % 6) == 0 || ($i % 8) == 0){
//         continue;
//     }
//     $count++;
// }

// echo $count;

// 14. Product Inventory Scanner

// for($i=1; $i<=200; $i++){
//     if(($i % 3) == 0 && ($i % 5) != 0){
//         echo "$i <br>";
//     }
// }


// 15. Count Active Users

// $users = [
//     ['active'=>true],
//     ['active'=>false],
//     ['active'=>true],
//     ['active'=>true]
// ];

// $count = 0;

// echo $users[0]['active'];

// for($i=0; $i<sizeof($users); $i++){
//     $active = $users[$i]['active'];
//     if($active == true){
//         $count++;
//     }
// }

// echo $count;

// 16. Find Highest Salary

// $max = PHP_INT_MIN;

// $salaries = [30000,50000,45000,70000,25000];

// for($i=0; $i<sizeof($salaries); $i++){
//     if($salaries[$i] > $max){
//         $max = $salaries[$i];
//     }
// }

// echo $max;

// 17. Find Lowest Salary

// $salaries = [30000,50000,45000,70000,25000];

// $min = PHP_INT_MAX;

// for($i=0; $i<sizeof($salaries); $i++){
//     if($salaries[$i] < $min){
//         $min = $salaries[$min];
//     }
// }

// 18. Calculate Total Cart Value

// $cart = [500,1000,2500,700];
// $total = 0;

// for($i=0; $i<sizeof($cart); $i++){
//     $total = $total + $cart[$i];
// }

// 19. Count Failed Students

// $count = 0;
// $marks = [45,20,78,90,30,15];
// for($i=0; $i<sizeof($marks); $i++){
//     if($marks[$i] < 35){
//         $count++;
//     }
// }

// 20. Find Duplicate Values

// $numbers = [1,2,3,4,2,5,1];

// for($i=0; $i<sizeof($numbers); $i++){
//     for($j=$i+1; $j<sizeof($numbers); $j++){
//         if($numbers[$i] == $numbers[$j]){
//             echo "$numbers[$i] ";
//         }
//     }
// }

// 21. Audit Log Analyzer

// $count = 0;
// for($i=1; $i<=500; $i++){
//     if(($i % 4) != 0 && ($i % 6) != 0 && ($i % 10) != 5){
//         $count++;
//     }
// }

// echo $count; 

// 22. Email Validation Report

// $count = 0;
// $emails = [
//     "a@gmail.com",
//     "",
//     "b@yahoo.com",
//     "",
//     "c@gmail.com"
// ];

// $count = 0;

// for($i=0; $i<sizeof($emails); $i++){
//     if($emails[$i] == ""){
//         continue;
//     }
//     $count++;
// }

// echo $count;

// 23. Attendance Report

// $attendance = [
//     true,
//     false,
//     true,
//     true,
//     false,
//     true
// ];

// $true = 0;
// $false = 0;

// for($i=0; $i<sizeof($attendance); $i++){
//     if($attendance[$i] == true){
//         $true++;
//     }else{
//         $false++;
//     }
// }

// echo "True: $true <br>";
// echo "False: $false <br>";

// 24. Sales Report Generator

// $sales = [1000,2500,3000,1200,800];

// $total = 0;
// $high = PHP_INT_MIN;
// $avg = 0;

// for($i=0; $i<sizeof($sales); $i++){
//     $total = $sales[$i];
//     $n = count($sales);
//     $avg = $total/$n;

//     if($sales[$i] > $high){
//         $high = $sales[$i];
//     }
// }

// echo "Total is: $total <br>";
// echo "Highest is: $high <br>";
// echo "avg is: $avg <br>";
