<?php

// include 'conn.php';

// $array1 = array(12,23,34);
// $array2 = array(45,56,67,78);   
// $arr = array_merge($array1,$array2);

// $assoc = array("id"=> 1, "name"=> "abc", "marks"=> 45);


// function squareIt($a){
//     return $a * $a;
// }

// function filterOut($a){
//     if(($a % 2) == 0) return $a;
// }

// $new = array_map("squareIt",$array1);
// echo "<pre>";
// print_r($new);

// array_shift($array2);
// echo "<pre>";
// print_r($array2);

// $arr = array_values($assoc);
// echo "<pre>";
// print_r($arr);

// array_pop($array2);
// echo "<pre>";
// print_r($array2);

// $work = array_filter($array2,"filterOut");
// echo "<pre>";
// print_r($work);

// $a = array(1,1,1,2,2,2,2,3,3,3,3);
// $u = array_unique($a);
// echo "<pre>";
// echo implode(",",$u);

// echo array_search(67,$array2);

// echo reset($array2);

// echo end($array2);
// array_unshift($array2,123);
// echo "<pre>";
// print_r($array2);

// array_push($array2,123);

// $rev = array_reverse($array2);
// echo "<pre>";
// print_r($rev);

// echo count($array2);
// $firm = ksort($assoc);
// echo "<pre>";
// print_r($firm);

// echo min($array2);
// echo max($array2);

// $str = "<h1>Hello World<h1>";
// $new_str = filter_var($str,FILTER_SANITIZE_STRING);
// echo $new_str;

// $email = "geeksforgeeks@gmail.co<m>";

// $nemail = filter_var($email,FILTER_SANITIZE_EMAIL);
// echo $nemail;

// $url = "www.geeksforgeeks.or°g";
// $nurl = filter_var($url,FILTER_SANITIZE_URL);
// echo $nurl;

// function hello($a)
// {
//     echo "hello World " . $a[0] . ' ' . $a[1];
// }

// function sum($a,$b){
//     $c = $a+$b;
//     echo $c;
// }

// call_user_func("hello",["Aaditya","ms"]);
// call_user_func_array("sum",[10,20]);

function displayNums()
{
    $nums = func_get_args();
    
    for($i=0; $i<sizeof($nums); $i++)
    {
        $d = $i+1;
        echo "This is $d index and it has $nums[$i] <br>";
    }
}

displayNums(12,23,34,45,56,78);