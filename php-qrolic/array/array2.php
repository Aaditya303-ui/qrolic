<?php

// Challenge 2: Update User Email

// $user = [
//     'name' => 'Virat',
//     'email' => 'old@gmail.com'
// ];

// $user['email'] = 'virat@gmail.com';

// Challenge 3: Add Mobile Number

// $user = [
//     'name' => 'Dhoni',
//     'city' => 'Ranchi'
// ];

// $user["mobile"] = '9876543210';

// Challenge 4: Delete City

// $user = [
//     'name' => 'Rohit',
//     'city' => 'Mumbai',
//     'email' => 'rohit@gmail.com'
// ];

// unset($user['city']);

// Challenge 5: Check Key Exists

// $user = [
//     'name' => 'Gill',
//     'email' => 'gill@gmail.com'
// ];

// if(array_key_exists('mobile',$user)){
//     echo 'Mobile exist';
// }else{
//     echo 'Mobile not found';
// }

// Challenge 6: Employee Salary Update

// $employee = [
//     'id' => 1,
//     'name' => 'Aaditya',
//     'salary' => 25000
// ];

// $employee['salary'] = $employee['salary'] + 5000;

// echo "<pre>";
// print_r($employee);

// Question 1: Print All Employee Names

// $employees = [
//     ['id'=>1,'name'=>'Aaditya'],
//     ['id'=>2,'name'=>'Virat'],
//     ['id'=>3,'name'=>'Dhoni']
// ];

// foreach($employees as $k => $v){
//     $name = $employees[$k]['name'];
//     echo "$name <br>";
// }

// Question 2: Find Total Employees

// $employees = [
//     ['id'=>1,'name'=>'A'],
//     ['id'=>2,'name'=>'B'],
//     ['id'=>3,'name'=>'C'],
//     ['id'=>4,'name'=>'D']
// ];

// echo count($employees);

// Question 3: Count Active Users

// $users = [
//     ['name'=>'A','active'=>true],
//     ['name'=>'B','active'=>false],
//     ['name'=>'C','active'=>true],
//     ['name'=>'D','active'=>true]
// ];

// $active = 0;

// foreach($users as $k => $v){
//     $active_users = $users[$k]['active'];

//     if($active_users == 'true'){
//         $active++;
//     }
// }

// echo $active;

// Question 4: Print Users Above Age 18

// $users = [
//     ['name'=>'A','age'=>16],
//     ['name'=>'B','age'=>22],
//     ['name'=>'C','age'=>19],
//     ['name'=>'D','age'=>15]
// ];

// foreach($users as $k => $v){
//     $age = $users[$k]['age'];

//     if($age > 18){
//         echo $users[$k]['name'] . "<br>";
//     }
// }

// Question 5: Find Highest Salary

// $employees = [
//     ['name'=>'A','salary'=>25000],
//     ['name'=>'B','salary'=>60000],
//     ['name'=>'C','salary'=>45000]
// ];

// $max = PHP_INT_MIN;
// $min = PHP_INT_MAX;

// $emp = "";
// $l_emp = "";

// foreach($employees as $k => $v){
//     $sal = $employees[$k]['salary'];
//     if($sal > $max){
//         $max = $sal;
//         $emp = $employees[$k]['name'];
//     }

//     if($sal < $min){
//         $min = $sal;
//         $l_emp = $employees[$k]['name'];
//     }
// }


// Question 8: Count Failed Students

// $students = [
//     ['name'=>'A','marks'=>20],
//     ['name'=>'B','marks'=>45],
//     ['name'=>'C','marks'=>30],
//     ['name'=>'D','marks'=>90]
// ];

// $count = 0;

// foreach($students as $k => $v){
//     $marks = $students[$k]['marks'];

//     if($marks < 35){
//         $count ++;
//     }
// }

// echo $count;

// Question 9: Search Employee by ID

// $employees = [
//     ['id'=>101,'name'=>'A'],
//     ['id'=>102,'name'=>'B'],
//     ['id'=>103,'name'=>'C']
// ];

// foreach($employees as $k => $v){
//     $id = $employees[$k]['id'];

//     if($id == 102){
//         echo "Employee found";
//     }
// }

// Question 10: Update Employee Salary Increase salary of employee id 102 by ₹5000.

// $employees = [
//     ['id'=>101,'name'=>'A','salary'=>25000],
//     ['id'=>102,'name'=>'B','salary'=>30000]
// ];

// foreach($employees as $k => $v){
//     $id = $employees[$k]['id'];

//     if($id == 102){
//         $employees[$k]['salary'] = $employees[$k]['salary'] + 5000;
//     }
// }

// echo "<pre>";
// print_r($employees);

// Question 11: Delete Employee

// $employees = [
//     ['id'=>101,'name'=>'A'],
//     ['id'=>102,'name'=>'B'],
//     ['id'=>103,'name'=>'C']
// ];

// foreach($employees as $k => $v){
//     $id = $employees[$k]['id'];

//     if($id == 102){
//         unset($employees[$k]);
//     }
// }

// echo "<pre>";
// print_r($employees);

// final question

// $employees = [
// [
// 'id'=>101,
// 'name'=>'A',
// 'salary'=>25000,
// 'active'=>true
// ],
// [
// 'id'=>102,
// 'name'=>'B',
// 'salary'=>45000,
// 'active'=>false
// ],
// [
// 'id'=>103,
// 'name'=>'C',
// 'salary'=>60000,
// 'active'=>true
// ],
// [
// 'id'=>104,
// 'name'=>'D',
// 'salary'=>35000,
// 'active'=>true
// ]
// ];


// $active = 0;
// $in_active = 0;
// $total_sal = 0;
// $max = PHP_INT_MIN;
// $min = PHP_INT_MAX;
// $n = count($employees);
// $active_log = [];

// foreach($employees as $k => $v){
//     $active_emp = $employees[$k]['active'];
//     $sal = $employees[$k]['salary'];

//     if($active_emp == true){
//         $active ++;
//         $active_log[] = $employees[$k]['name'];
//     }else{
//         $in_active ++;
//     }
//     $total_sal = $total_sal + $sal;

//     if($sal > $max){
//         $max = $sal;
//     }

//     if($sal < $min){
//         $min = $sal;
//     }

//     $avg = $total_sal/$n;
// }
// echo "The total count of emp is: ". count($employees) . "<br>";
// echo "The total active status of emp is: ".$active . "<br>";
// echo "The total active status of emp is: ".$in_active . "<br>";
// echo "The total salary is: ".$total_sal . "<br>";
// echo "The max salary is: ".$max . "<br>";
// echo "The min salary is: ".$min . "<br>";
// echo "The avg salary is: ".$avg . "<br>";

// echo "Active employees are: <br>";
// foreach($active_log as $a){
//     echo "$a <br>";
// }


// echo $_SERVER['PHP_SELF'] . "<br>";
// echo $_SERVER['SERVER_NAME'] . "<br>";
// echo $_SERVER['SCRIPT_NAME'] . "<br>";