<?php

// 1) User Registration - Username Length

// $username = "Hardik123";
// $len = strlen($username);

// if($len >= 5 && $len <= 15){
//     echo "Valid user";
// }else{
//     echo "InValid user";
// }

// (2) Email Domain Checker

// $e = "gmail.com";
// $e = "john@gmail.com";

// if(strpos($e,"gmail.com",4)){
//     echo "Gmail user";
// }else{
//     echo "Invalid user";
// }

// (3) Product Description Preview

// $str = "Apple iPhone 16 Pro Max Titanium Edition";
// $a = substr($str,0,15); 
// echo "$a...";

// (4) Role Authorization System

// $roles = ['Admin','HR','Manager'];

// if(in_array("Manager",$roles)){
//     echo "Manager is found";
// }

// (5) Skills Form

// $str = "PHP,MySQL,Laravel,React";
// $array = explode(",",$str);
// echo "<pre>";
// print_r($array);

// 6. Bad Word Filter

// $str = "This company is stupid";
// $field = str_replace("stupid","*******",$str);
// echo $field;

// 7. Tags Storage

// $tags = ['PHP','Laravel','MySQL'];
// $result = implode(",",$tags);
// echo "<pre>";
// print_r($result);

// 8. Merge Team Lists

// $teamA = ['virat','rohit'];
// $teamB = ['hardik','jadeja'];
// $ind = array_merge($teamA,$teamB);
// print_r($ind);

// 9. Shopping Cart Items

// $cart = [
// 'iPhone',
// 'Laptop',
// 'Mouse',
// 'Keyboard'
// ];

// $c = count($cart);
// echo $c;

// 10. Search User by Keyword

// echo strpos("alex_hales","alex");

// 12. CSV export

// $string = "John,Doe,john@gmail.com";
// $arr = explode(",",$string);
// $firstname = $arr[0];
// $lastname = $arr[1];
// $email = $arr[2];

// echo "First Name: $firstname <br>";
// echo "Last Name: $lastname <br>";
// echo "Email: $email<br>";

// 13. password validation

// $input = "Hardik@123";
// $len = strlen($input);

// if($len >= 8 && strpos($input,"@")){
//     echo "Strong password";
// }

// 14. User Profile Summary

// $bio = "I love PHP and Laravel development";
// $learn = str_replace("Laravel","React",$bio);
// $new = substr($learn,0,15);
// echo "$new......";

// 15. Employee Skills Management

// $db = "PHP,MySQL,Laravel";
// $array = explode(",",$db);

// if(in_array("Laravel",$array)){
//     echo "exist";
// }
// $a = array("React");

// $merge = array_merge($array,$a);

// $str = implode(", ",$merge);
// echo $str;

// preg_match

// 1) Username validation 

// $str = "Hardik123";
// $pattern = "/^[a-zA-Z_].{5,15}/";

// if(preg_match($str,$pattern)){
//     echo "Valid user";
// }else{
//     echo "Invalid user";
// }

// 2) Password Strength checker

// $pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{8,}/";
// $str = "Hardik123";

// if(preg_match($pattern,$str)){
//     echo "pattern get matches";
// }else{

// }

// 3. Employee ID Validation

// $pattern = "/EMP-[0-9]{4}$/";
// $str = "EMP-1234";

// if(preg_match($pattern,$str)){
//     echo "Pattern matches";
// }

// preg_replace

// Hide Digits

// $mobile = "9876543210";
// $pattern = "/\d/";

// $updated = preg_replace($pattern,"*",$mobile);
// echo $updated;

// 2. Remove All Numbers
// $str = "Virat123Kohli45";
// $pattern = "/\d/";
// $updated = preg_replace($pattern,"",$str);
// echo $updated;

// 3. Remove Spaces
// $str = "Virat Kohli";
// $pattern = "/\s/";
// $updated = preg_replace($pattern,"",$str);
// echo $updated;

// 4. Replace Multiple Spaces with One
// $str = "Virat     Kohli      India";
// $pattern = "/\s+/";
// $updated = preg_replace($pattern," ",$str);
// echo $updated;

// real 
// $str = "Hardik@123!!!";
// $pattern = "/[^A-Za-z]/";
// $username = preg_replace($pattern,"",$str);
// echo $username;

// $ph = "+91-98765 43210";
// $pattern = "/[^0-9]/";
// $username = preg_replace($pattern,"",$ph);
// echo $username;

// Q1 - Username Validation (trim(), strlen())

// $user = "   virat   ";
// $trim = trim($user);
// echo strlen($trim);

// Q2 - Greeting System (ucfirst(), strtolower())
// $input = "vIRAT";
// $str = strtolower($input);
// $fname = ucfirst($str);
// echo $fname;

// Q3 - Email Domain Checker
// $input = "virat@gmail.com";

// if(strpos($input,"@gmail.com")){
//     echo "Valid email";
// }else{

// }

// Q5 - Extract First Name
// $input = "Virat Kohli";
// echo substr($input,0,5);

// Q6 - Mask Mobile Number
// $input = 9876543210;
// $len = substr($input,-4);
// $left = strlen($input) - strlen($len);
// $strep = str_repeat("*",$left);
// echo "$strep$len";

// Q7 - Find Last Dot in Filename (strrpos())

// $input = "resume.final.v2.pdf";
// echo strripos($input,".");

// Q8 - Extract File Extension
// $input = "resume.final.v2.pdf";
// $n = strripos($input,"pdf");
// $needle = substr($input,$n);
// echo $needle;

// Q9 - Censor Bad Words
// $input = "Virat is stupid";
// echo str_replace("stupid","******",$input);

// Q10 - Generate OTP Placeholder
// echo str_repeat("*",12);

// Q11 Search Product

// $product = "Apple iPhone 15 Pro Max";
// $input = "iPhone 15";

// if(strpos($product,$input)){
//     echo "Product found";
// }

// Q12 HTML Injection Protection

// $n1 = "<script>alert('Hack')</script>";
// echo htmlspecialchars($n1);

// Q13 - Convert Product Code

// $l1 = "abc123";
// echo strtoupper($l1);

// Q14 - Clean CSV Data

// $input = "    Virat Kohli           ";

// $ltrim = strlen(ltrim($input));
// $rtrim = strlen(rtrim($input));
// $trim = strlen(trim($input));

// echo $trim;

// Q15 - Currency Converter

// $input = "Price: $500";
// echo strtr($input,"$","₹");

// Bonus Real Internship Challenge

// $input = "    vIRAT@GMAIL.COM    ";
// $rinput = trim($input);
// $stlower = strtolower($rinput);

// if(strpos($stlower,"@gmail.com")){
//     $username = substr($stlower,0,5);
//     $cusername = ucfirst($username);
//     $cemail = ucfirst($stlower);
// }

// $n = substr($stlower,1,4);
// $v = str_repeat("*",strlen($n));
// echo str_replace($n,$v,$cemail);

// arrays

// Q1 - Tags System

// $tags = "php,mysql,javascript,react";
// $array = explode(",",$tags);
// echo "<pre>";
// print_r($array);

// Q2 - Email Recipients
// $emails = ["john@gmail.com","virat@gmail.com","rohit@gmail.com"];
// $str = implode(", ",$emails);
// echo $str;

// Q3 - Shopping Cart
// $cart = ["Laptop","Mouse"];
// array_push($cart,"Keyboard","Monitor");
// echo "<pre>";
// print_r($cart);
// echo count($cart);

// Q4 - Remove Last Product
// $cart = ["Laptop","Mouse","Keyboard"];
// array_pop($cart);

// Q5 - VIP Customer
// $cust = ["Rohit","Virat","Gill"];
// array_unshift($cust,"Dhoni");
// echo "<pre>";
// print_r($cust);

// Q6 - Serve Queue
// $queue = ["Customer1","Customer2","Customer3"];
// $first = array_shift($queue);
// echo $first;

// Q7 - Product Search
// $products = ["Laptop","Mouse","Keyboard"];

// if(in_array("Mouse",$products)){
//     echo "Mouse existed";
// }

// Q8 - Duplicate Emails
// $dup = [
//  "a@gmail.com",
//  "b@gmail.com",
//  "a@gmail.com",
//  "c@gmail.com"
// ];

// $array = array_unique($dup);
// echo "<pre>";
// print_r($array);

// Q9 - User Roles
// $user = [
//     "name"=>"Virat",
//     "role"=>"Admin"
// ];

// if(array_key_exists("role",$user)){
//     echo "exists";
// }

// Q10 - Employee IDs
// $array = [
//  101=>"Virat",
//  102=>"Rohit",
//  103=>"Gill"
// ];

// $ids = array_keys($array);
// print_r($ids);

// Q11 - Uppercase Names

// function upperCase($v){
//     $upper = strtoupper($v);
//     return $upper;
// }

// $arr = ["virat","rohit","gill"];
// $updated = array_map("upperCase",$arr);
// echo "<pre>";
// print_r($updated);

// Q12 - Remove Empty Values (array_filter())(doubt)
// function filter(string $v){
//     if($v !== ""){
//         $array[] = $v;
//     }
// }
// $array = ["Virat","","Rohit",null,"Gill"];
// $filter = array_filter($array,"filter");
// echo "<pre>";
// print_r($filter);

// Q13 - Merge Teams
// $teamA = ["Virat","Rohit"];
// $teamB = ["Gill","Pant"];
// $ind = array_merge($teamA,$teamB);
// echo "<pre>";
// print_r($ind);

// Q14 and Q15 - Last Logged User and first logged user
// $user = ["Virat","Rohit","Gill","Pant"];
// echo reset($user);
// echo end($user);

// Q16 - Pagination
// $prod = ["P1","P2","P3","P4","P5","P6"];
// $work = array_slice($prod,2,3);
// echo "<pre>";
// print_r($work);

// Q17 - Recent Activities
// $input = ["Login","Upload","Logout"];
// $rev = array_reverse($input);
// echo "<pre>";
// print_r($rev);

// Q18 - Missing Students
// $c1 = ["Virat","Rohit","Gill","Pant"];
// $c2 = ["Virat","Pant"];

// $all = array_diff($c1,$c2);
// echo "<pre>";
// print_r($all);

// Highest Salary and lowest Salary
// $sal = [25000,45000,30000,80000];
// echo max($sal);
// echo min($sal);

// Q21 - Sort Product Codes(doubt)
// $input = [
//  "p3"=>"Keyboard",
//  "p1"=>"Laptop",
//  "p2"=>"Mouse"
// ];

// $array = ksort($input,SORT_STRING);
// echo "<pre>";
// print_r($array);

// Q22 - User Count
// $user = ["Virat","Rohit","Gill","Pant"];
// echo count($user);

// Q23 - Find Position
// $array = ["Virat","Rohit","Gill","Pant"];
// $result = array_search("Gill",$array);
// echo $result;

// Q24 - Validate API Response
// $data = ["status"=>"success"];
// if(is_array($data)){
//     echo true;
// }else{
//     echo false;
// }

// Q25 - Mini E-Commerce Challenge

// $cart = [
//  "Laptop",
//  "Mouse",
//  "Laptop",
//  "",
//  "Keyboard"
// ];

// function filterOut($v){
//     return $v !== "";
// }

// $filter = array_filter($cart,"filterOut");
// $unique = array_unique($filter);
// array_push($unique,"Monitor");
// $c = count($filter);
// $rev = array_reverse($unique);
// $first = reset($unique);
// $last = end($unique);
// $mouse = array_search("Mouse",$unique);

// Q1) Replace all digits with *

// $input = "My OTP is 123456";
// $pattern = "/\d/";

// echo preg_replace($pattern,"*",$input);

// Q2) Remove all numbers from a string

// $input = "Virat18 Kohli45";
// $pattern = "[\d]";

// echo preg_replace($pattern,"",$input);

// Q3) Convert all vowels to *
// $input = "Programming";
// $pattern = "/[aeiou]/";
// echo preg_replace($pattern,"*",$input);

// Q6) Remove special characters
// $input = "Hello@#$%World!";
// $pattern = "/[\W]/";
// echo preg_replace($pattern,"",$input);

// Q7) Convert dates from DD/MM/YYYY to YYYY-MM-DD
// $input = "15/08/2025";
// $pattern = "/[\W]/";
// echo preg_replace($pattern,"-",$input);

// Q8. Wrap hashtags in HTML
// $input = " Learning #PHP and #Laravel ";
// $pattern = "/[\s]/";
// echo preg_replace($pattern,"");

// Q9. Censor bad words
// $input = "PHP is stupid sometimes";
// $pattern = "/stupid/";
// $string = "stupid";
// $len = strlen($string);
// $repeat = str_repeat("*",$len);

// echo preg_replace($pattern,$repeat,$input);

// Q10. Extract and replace product codes
// $input = "Order PROD-1234 and PROD-5678 shipped";
// $pattern = "/[-\d]/";

// echo preg_replace($pattern,"UCT",$input);

// preg_split
// $name = "PHP,Java|Python";
// $pattern = "/\W/";
// $lg = preg_split($pattern,$name);
// echo "<pre>";
// print_r($lg);

// Q1. Split CSV Data

// $work = "PHP,Java,Python,Laravel";
// $pattern = "/\W/";
// $lg = preg_split($pattern,$work);
// echo "<pre>";
// print_r($lg);

// Q2. Split on Multiple Delimiters
// $input = "PHP,Java|Python-Laravel";
// $pattern = "/\W/";
// $lg = preg_split($pattern,$input);
// print_r($lg);

// Q1. Store User Preferences in a File 
// $preferences = [
//     "theme" => "dark",
//     "language" => "en",
//     "notifications" => true
// ];

// $data = json_encode($preferences);
// $decode = json_decode($data,true);

// echo gettype($decode);

// file_put_contents("settings.json",$data);

// echo file_get_contents("settings.json");

// Q2. API Response Processing

// $api = '{
//   "name":"Virat",
//   "team":"India",
//   "runs":14000
// }';

// $array = json_decode($api,true);
// $name = $array['name'];
// $runs = $array['runs'];

// echo $name;
// echo $runs;

// Q3. Store Shopping Cart in Session
// $cart = [
//     "Laptop",
//     "Mouse",
//     "Keyboard"
// ];

// $serialise_data = serialize($cart);
// $unserialise_data = unserialize($serialise_data);
// echo "<pre>";
// print_r($unserialise_data);

// Q4. Upload and Store Profile Picture(doubt)

// Q5. Save Student Records

// $students = [
//     [
//         "name" => "Aaditya",
//         "marks" => 85
//     ],
//     [
//         "name" => "Virat",
//         "marks" => 92
//     ]
// ];

// $json_data = json_encode($students,JSON_PRETTY_PRINT);
// file_put_contents("students.json",$json_data);
// $decode = json_decode($json_data,true);
// echo "<pre>";
// for($i=0; $i<sizeof($decode); $i++){
//     $marks = $decode[$i]['marks'];
//     $total = 0;
//     if($marks > $total){
//         $total = $marks;
//     }
// }
// echo $total;


// echo file_get_contents("students.json");

// Q6. Backup PHP Configuration
// $config = [
//     "host" => "localhost",
//     "user" => "root",
//     "port" => 3306
// ];

// $serialise_data = serialize($config);
// file_put_contents("serialise.txt",$serialise_data);
// echo file_get_contents("serialise.txt");
// $deserialise_data = unserialize($serialise_data);

// echo "<pre>";
// print_r($deserialise_data);

// Q8. Mini Chat Application

// $message = [
//     "sender" => "Aaditya",
//     "message" => "Hello",
//     "time" => time()
// ];

// $data = json_encode($message,JSON_PRETTY_PRINT);
// echo "<pre>";
// print_r($data);

// Q7. Digital Clock

// $time = date("H:i:s");
// echo $time;

// Q8. Student Joining Date
// $timestamp = 1723000000;
// $new = date("d-M-Y",$timestamp);
// echo $new;

// Q9. Convert Date String to Timestamp
// $input = "15 August 2025";
// echo strtotime($input);

// Q10. Tomorrow's Timestamp
// $input = "tomorrow";
// $l = strtotime($input);
// echo date("d-m-Y",$l);

// Q11. Next Sunday
// $next = strtotime("next Sunday");
// $l = date("d-m-Y",$next);
// echo $l;

// Q12. Age Calculation

// $dob = "12-05-2004";

// $birthtimestamp = strtotime($dob);
// $currenttimestamp = time();

// $diffage = $currenttimestamp-$birthtimestamp;

// $approx = floor($diffage/(24*60*60*365));

// echo $approx;

// Q13. Event Countdown

// $EventTime = strtotime("31 December 2026");
// $currentTime = time();
// $diff = $EventTime - $currentTime;
// echo floor($diff/(24*60*60));

// Blog Post Published X Days Ago

// $postDate = "2025-08-01";
// $posted = strtotime($postDate);
// $currentTime = time();
// $diff = $currentTime-$posted;

// $days = floor($diff/(24*60*60));
// echo $days;

// Q18. Attendance System

// $office_start = "09:00:00";
// $check_in = "09:15:00";

// $start_time = strtotime($office_start);
// $check_in = strtotime($check_in);

// $second_late = $check_in - $start_time;

// $minutes_late = $second_late/60;
// echo $minutes_late;

// Display User-Friendly Date

// $time = 1752749200;
// $new = date("l, d l Y",$time);
// echo $new;

// Q2. Login Session

// $loginTime = strtotime("09:00:00");
// $currentTime = strtotime("10:45:00");

// $time = $currentTime-$loginTime;
// $lt = floor($time/(60));
// echo $lt;

// Q3. Password Reset Link

// $time = strtotime("+15 minutes");
// $currentTime = time();
// $exp_time = $currentTime + (15*60);
// echo date("h:i:s",$currentTime);
// echo date("h:i:s",$exp_time);

// Late Employee

// $start_time = "09:00:00";
// $check_time = "09:23:00";

// $start = strtotime($start_time);
// $end = strtotime($check_time);

// $diff = $end-$start;
// $minutes = $diff/(60);
// echo $minutes;

// Login Session
// $loginTime = strtotime("09:00:00");
// $currentTime = strtotime("10:45:00");

// $diff = $currentTime-$loginTime;
// $minutes = floor($diff/(60));
// echo $minutes;

// Password Reset Link

// $time = time();
// $new = time() + (15*60);
// $currTime = date("h:i:s",$time);
// $newTime = date("h:i:s",$new);
// echo "Created At: $currTime<br>";
// echo "Expires At: $newTime<br>";

// Q4. Late Employee

// $start = strtotime("09:00:00");
// $check_in = strtotime("09:23:00");

// $diff = $check_in-$start;
// $time = $diff/60;
// echo $time;

// Q5. Working Hours

// $check_in = strtotime("09:15");
// $check_out = strtotime("18:45");

// $diff = $check_out-$check_in;
// $hours = $diff/(60*60);

// echo $hours;

// Calculate Age

// $birthDate = strtotime("15-08-2004");
// $new = time();
// $diff = $new-$birthDate;
// $days = floor($diff/(365*24*60*60));
// echo $days;

// $birthDate = new DateTime("15-08-2004");
// $new = new DateTime();
// $diff = $new->diff($birthDate);
// echo $diff->y;

// $birthDate = strtotime("15 August 2026");
// $new = time();

// $diff = $birthDate-$new;
// $age = floor($diff/(24*60*60));
// echo $age;

class Employee {

    public function display(){
        echo "Employee Details";
    }

    public function update(){
        echo "Employee Updated";
    }
}

function update1(){
        echo "Employee Updated";
}

// Detect Object

// $emp = new Employee();

// if(is_object($emp)){
//     echo "This is an object of Employee class";
//     echo get_class($emp);
// }

// if(class_exists("Employee")){
//     echo "class exists";
// }

// if(function_exists("strlen")){
//     echo "function exist";
// }

// Mini Router

class Router{
    static function createUser()
    {
        echo "Create User";
    }

    static function deleteUser()
    {
        echo "Delete the user";
    }

    static function updateUser()
    {
        echo "Update the user";
    }
}
// $r = new Router();
// call_user_func([$r,"createUser"]);

// $r = new Router();
// if(is_callable($r,"createUser")){
//     call_user_func([$r,"createUser"]);
// }


// function display($id,$name,$department)
// {
//     echo "$id is his id his name is $name and belongs to $department";    
// }

// call_user_func_array("display",[101,"Aaditya","IT"]);

require_once __DIR__ .'../../debug/work.php';
