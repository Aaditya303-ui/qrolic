<?php

// 1. is_array

// $variable_name4=array('A', 'B', 'C');
// $variable_name1=67.099;

// if(is_array($variable_name4)){
//     echo "Its array";
// }

// 2. in_array
// $fruits = ["apple", "banana", "orange",123];

// if(in_array("123",$fruits)){
//     echo "Banana is present";
// }

// 3. explode

// $str = "Riya,Rimjhim,Ayushi";
// $array = explode(",",$str,5);
// echo "<pre>";
// print_r($array);

// 4. implode
// $str = array("hello","my","name","is","Aaditya");
// $array = implode(" ",$str);
// echo $array;

// 5. array_merge
// $str1 = array("Virat","salt","Paddikal");
// $str2 = array("Rajat","Tim David","Krunal");
// $arr = array_merge($str1,$str2);
// print_r($arr);

// 6. array_key_exist

// $array = array("Name" => "Virat", "team" => "rcb", "role" => "Batter");

// if(array_key_exists("Name",$array)){
//     echo "Its present there in array";
// }else{
//     echo "Its not present";
// }

// 7. array_keys

// $array = array("Name" => "Virat", "team" => "rcb", "role" => "Batter");
// $lsg = array_keys($array);
// echo "<pre>";
// print_r($lsg);

// 8. array_map

// function fun1($v1){
//     return $v1*$v1;
// }

// function fun2($v2){
//     return $v2+$v2;
// }

// $arr1 = array(1, 2, 3, 4, 5);
// $arr2 = array(1, 3, 3, 4, 8);

// echo "<pre>";
// // print_r(array_map('fun1',$arr1));
// print_r(array_map("fun2",$arr2,$arr1));

// 9. array_shift

// $a=array("a"=>"red","b"=>"green","c"=>"blue");
// array_shift($a);
// echo "<pre>";
// print_r($a);

// 10. array_value
// $a=array("a"=>"red","b"=>"green","c"=>"blue");
// $b = array_values($a);
// print_r($b);

// 11. array_pop
// $a=array("a"=>"red","b"=>"green","c"=>"blue");
// array_pop($a);
// echo "<pre>";
// print_r($a);

// 12. array_slice // false: reset Keys in true keeps keys as it is
// $array = array("Shikhar","Rohit","Virat","Dhoni");
// echo "<pre>";
// print_r(array_slice($array,1,3,false));

// 13. array_filter()
// function even($a){
//     if(($a % 2) == 0){
//         return $a;
//     }
// }
// $array = array(12, 0, 0, 18, 27, 0, 46);
// echo "<pre>";
// print_r(array_filter($array,"even"));
// print_r(array_filter($array,"even",ARRAY_FILTER_USE_KEY));
// print_r(array_filter($array,"even",ARRAY_FILTER_USE_BOTH));

// 14. array_unique

// $a=array("red", "green", "red", "blue");
// print_r(array_unique($a,SORT_NUMERIC));

// $a1=array(0, 0, 0, 1,1,1,3,3,3,3,4,);
// print_r(array_unique($a1,SORT_NUMERIC));

// 15. array_search
// $a = array("a"=>"5","b"=>5,"c"=>"5");
// echo array_search(5,$a,true);

// 16. reset(): function
// $people = array("Peter", "Joe", "Glenn", "Cleveland");

// echo current($people). "<br>";
// echo next($people). "<br>";
// echo prev($people). "<br>";
// echo end($people). "<br>";
// echo prev($people). "<br>";
// echo current($people). "<br>";
// echo reset($people). "<br>";
// echo next($people). "<br>";

// 17. array_unshift()
// $array = array("ram","krishna","aakash");
// $a1 = "rohan";
// $a2 = "ranjeeb";
// $a3 = "saniya";

// array_unshift($array,$a1,$a2,$a3);

// print_r($array);

// 18. array_push
// $array = array("ram","krishna","aakash");
// $a1 = "Rohit";
// $a2 = "Gill";
// $a3 = "Virat";
// array_push($array,$a1,$a2,$a3);

// 19. array_reverse  
// $rev = array_reverse($array);
// print_r($rev);

// 20. array_diff
// $a = [10,20,20,30];
// $b = [20];
// $c = array_diff($a,$b);
// print_r($c);

// 21. count,max,min
// $array = array(12, 0, 0, 18, 27, 0, 46);
// echo count($array);
// echo min($array);

// 22. ksort()
// $age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
// ksort($age);
// ksort($age,SORT_NUMERIC);
// ksort($age,SORT_STRING);
// print_r($age);

// Employee Attendance System

// $d = date("d-m-Y");
// echo $d;

// Login Audit

// $t = time();
// $days = strtotime("+30 days",$t);

// echo date("d-m-Y",$days);

// Interview Scheduler

// $next = "next Monday";
// $time = strtotime($next);
// $work = date("d-m-Y",$time);
// echo $work;

// Order Delivery Tracker
// $t = time();
// $str = strtotime("+5 days",$t);
// echo date("d-m-Y",$str);