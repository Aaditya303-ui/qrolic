<?php

// count(): count number of items in array

// $cars=array("Volvo"=>array("XC60","XC90"),"BMW"=>array("X3","X5"),"Toyota"=>array("Highlander"));
// echo count($cars,1);
// echo count($cars);

// is_array: it checks wheather its array or not
// $b = array("red", "green", "blue");
// echo "b is " . is_array($b) . "<br>";

// substr: returns a specific part of the string
// $a = "Hello World!";
// echo substr($a,7);
// echo substr($a,-4);
// echo substr($a,0,8);
// echo substr($a,0,5);
// echo substr($a,6,6);
// echo substr($a,0,-6);
// echo substr($a,-10,-2);

// in_array(): use to search specific value in a array

// $people = array("Peter", "Joe", "Glenn", "Cleveland", 23);

// if(in_array("Peter",$people,TRUE)){
//     echo "Match found";
// }

// explode()
// $str = "Hello world. It's a beautiful day.";
// print_r(explode(" ",$str));
// print_r(explode(" ",$str,4));
// print_r(explode(" ",$str,-2));

// str_replace: it replaces a character with another in a string
// echo str_replace("world","Peter","Hello world!");
// $arr = array("blue","red","green","yellow");
// print_r(str_replace("red","pink",$arr,$i));
// echo "Replacement: $i";

// $find = array("Hello","World");
// $replace = array("B");
// $arr = array("Hello","World","!");
// $new = str_replace($find,$replace,$arr);

// echo "<pre>";
// print_r($new);

// implode()
// $arr = array("Hello","World","I","am","happy");
// echo implode(" ",$arr);

// $arr = array('Hello','World!','Beautiful','Day!');
// echo implode(" ",$arr)."<br>";
// echo implode("+",$arr)."<br>";
// echo implode("-",$arr)."<br>";
// echo implode("*",$arr)."<br>";

// strlen
// $str = "Hello world!";
// echo strlen($str);

// array_merge
// $a = array("Phil Salt","Virat Kohli","Devdutt Paddikal");
// $b = array("Rajat Patidar","Jitesh Sharma","Tim david");
// $c = array_merge($a,$b);
// echo "<pre>";
// print_r($c);

// strpos
// $a = "Hello World!";
// $b = strpos($a,"World");
// echo $b;

// preg_match
// $str = "Hardik123";
// $pattern = "/^[a-zA-Z_].{5,15}/";

// if(preg_match($str,$pattern)){
//     echo "Valid user";
// }else{
//     echo "Invalid user";
// }

// trim(): removes the white space

// $str = "          Hello World!               ";
// echo strlen(trim($str));

// strtolower: converts string to lowercase

// $str = "Hello World!";
// echo strtolower($str);

// file_exists: It checks wheather file exist or not 

// echo file_exists("work.txt");

// is_string: to check wheather its string or not

// $a = 1;
// echo is_string($a);

// $b = "Hello";
// echo is_string($b);

// preg_replace

// $str = "I love Java";
// echo preg_replace("/Java/","Php",$str);

// file_get_content
// $homepage = file_get_contents("https://www.geeksforgeeks.org/");

// $homepage = file_get_contents('work.txt',false,null,0,14);
// echo $homepage;

// array_keys

// $a = array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
// echo "<pre>";
// print_r(array_keys($a));

// dirname
// echo dirname("c:/qrolic/functions/first10.php",1);

// if(function_exists('is_array')){
//     echo "Function is available";
// }else{
//     echo "Its not a function";
// }

// function welcomeMsg()
// {
//     echo "Welcome to gfg content";
// }

// if(function_exists("welcomeMsg")){
//     echo "It existed";
// }

// rtrim()

// $str = "hello world!";

// echo rtrim($str,"!");
// echo ucwords($str);

// str_repeat()

// echo str_repeat("Wow",10);

// str_pos()

// echo strpos("Feeling proud of Indian Army","Indian");

// echo chr(95);

// strtr()

// echo strtr("Hilla Warld","ia","eo");

// $array = array("Hello" => "Hi", "World" => "How are you");
// echo strtr("Hello World",$array);

// $kkr = "<h1>I am heading</h1>";
// echo htmlspecialchars($kkr,ENT_QUOTES | ENT_HTML5,'UTF-8');

// preg_match PREG_OFFSET_CAPTURE: return it in 2d array

// $geeks = 'Geeksforgeeks';
// preg_match('/(Geeks)(for)(geeks)/',$geeks,$matches,PREG_OFFSET_CAPTURE);
// echo "<pre>";
// print_r($matches);

// preg_match PREG_UNMATCHES_AS_NULL
// $name = "Hardik";
// $pattern = "/Hardik(Pandya)?/";
// preg_match($pattern,$name,$matches,PREG_UNMATCHED_AS_NULL);
// echo "<pre>";
// print_r($matches);

// preg_match_all

// $str = "The rain in SPAIN falls mainly on the plains.";
// $pattern = "/ain/i";

// if(preg_match_all($pattern,$str,$matches)){
//     print_r(count($matches[0]));
// }

// $str = "Admin-123";
// $pattern = "/^([A-Za-z]+)-([0-9]{3})/";
// if(preg_match_all($pattern,$str,$matches,PREG_OFFSET_CAPTURE)){
//     echo "<pre>";
//     print_r($matches);
// }

// if(preg_match_all($pattern,$str,$matches,PREG_SET_ORDER)){
//     echo "<pre>";
//     print_r($matches);
// }

// if(preg_match_all($pattern,$str,$matches,PREG_PATTERN_ORDER)){
//     echo "<pre>";
//     print_r($matches);
// }

// $array = array(
//     12,23,34,array(
//                     45,"string","str1","str2",array(array())
//                     ),45,56,"str3",
//                     array(
//                         45,"string","str1","str2",array()
//                     ,array(12,23,34,45,array(12,23,34,45,56,array(12,23,34))))
//     );

// $n = sizeof($array);
// for($i=0; $i<$n; $i++){
//    if(is_array($array[$i])){
//     $newArr = $array[$i];
//     echo "<pre>";
//     print_r($newArr);
//     for($j=0; $j<sizeof($newArr); $j++){
//         if(is_array($array[$i])){}
//         echo $newArr[$j] ."<br>";
//     }
//    }else{
//        echo "$array[$i] <br>";
//    }
// }

// function forArray($arr){
//     for($j=0; $j<sizeof($arr); $j++){
//         if(is_array($arr[$j])){
//             echo "<br>";
//             forArray($arr[$j]);
//         }else{
//             echo "$arr[$j] ";
//         }
//     }
//     echo "<br>";
// }

// forArray($array);

// file_exists()
// echo file_exists("work.txt");

// file_get_contents()
// echo file_get_contents("working.txt", true);

// set_include_path(__DIR__ . '/../pattern/');
// echo file_get_contents("working.txt", true);

// file_put_contents()
// $string = "A CE php internship for me to work";
// $lk = "Hello I am here \n";
// file_put_contents("gfg.txt",$string);
// echo file_put_contents("gfg.txt",$lk,FILE_APPEND | LOCK_EX);

// set_include_path(__DIR__.'/../pattern/');
// echo file_put_contents("working.txt",$lk,FILE_USE_INCLUDE_PATH | LOCK_EX);

// unlink("working.txt");

// $read = fopen("work.txt",'r');

// while(($line = fgets($read))){
//     echo $line;
// }

// $read = fopen("work.txt","w");
// echo fwrite($read,"Would you rather.....");

// if(is_file("work.txt")){
//     echo "File is present";
// }

// $file = "/qrolic/function.php";
// echo basename($file);

// echo basename(__FILE__,'.php');
// echo basename(__FILE__);

// echo dirname(__FILE__);
# output C:\xampp\htdocs\qrolic\functions

// echo dirname(__FILE__,2);
# output C:\xampp\htdocs\qrolic

// echo dirname(__FILE__,3);
# output C:\xampp\htdocs

// realpath 
// set_include_path(__DIR__.'/../pattern/');
// echo realpath("working.txt");
# C:\xampp\htdocs\qrolic\functions\gfg.txt

// is_dir

// if(is_dir(__DIR__)){
//     echo "Directory is there";
// }else{
//     echo "Directory isnt there";
// }

// mkdir
// mkdir("qrolic/functions/juneimage",0777,true);

// echo "Base is: ".basename(__DIR__)."<br>";
// echo "realpath is: ".realpath(__DIR__)."<br>";
// echo "dirname is: ".dirname(__DIR__)."<br>";

// $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
// echo "<pre>";
// echo json_encode($age);

// $arr = array('a'=>1,'b'=>2,'c'=>3,'d'=>4);
// echo json_encode($arr);

// json_encode()

// $a = array('<h1>Aaditya jadeja</h1>');
// echo "<pre>";
// echo json_encode($a);
// echo json_encode($a,JSON_HEX_TAG);
// echo json_encode($a,JSON_HEX_APOS);
// echo json_encode($a,JSON_HEX_QUOT);

// json_decode()

// $json = '{"g":7, "e":5, "e":5, "k":11, "s":19}';
// $json = '{
//     "user": {
//         "profile": {
//             "name": "Aaditya"
//         }
//     }
// }';

// $json = json_encode(
//     array(
//         1 => array(
//             'English' => array(
//                 'One',
//                 'January'
//             ),
//             'French' => array(
//                 'Une',
//                 'Janvier'
//             )
//         )
//     )
// );

// $json = '{"number": 12345678901234567890}';

// echo "<pre>";
// print_r(json_decode($json,true,512,JSON_OBJECT_AS_ARRAY));
// $a = json_decode($json,true,2);
// echo 'Last error: ', json_last_error_msg(), PHP_EOL, PHP_EOL;
// // echo $a->{"g"};
// echo json_decode($json,false,512,JSON_BIGINT_AS_STRING);
// var_dump(json_decode($json));
// var_dump(json_decode($json,true));

// $myvar = array(
//     'hello',
//     42,
//     array(1, 'two'),
//     'apple'
// );

// $encode = json_encode($myvar);
// $decode = json_decode($encode,false,512,JSON_FORCE_OBJECT);
// echo "<pre>";
// print_r($decode);

// serialise

// $a = serialize($myvar);
// $b = unserialize($a);
// print_r($b);

// base64_encode() and decode

// $img = "profile.jpg";
// $a = base64_encode($img);
// echo $a;
// $b = base64_decode($img);
// echo $b;

// is_string()

// $a = "Hello I am here";
// if(is_string($a)){
//     echo "$a is ".is_string($a)."<br>";
// }

// $b = null;

// if(is_null($b)){
//     $r = is_null($b);
//     echo "$b is $r <br>";
// }

// is_numeric()

// $a = 32;
// echo is_numeric($a);

// $b = 0;
// echo is_numeric($b);

// $c = 32.5;
// echo is_numeric($c);

// $d = "32";
// echo is_numeric($d);

// $e = true;
// echo "e is " . is_numeric($e) . "<br>";

// $f = null;
// echo "f is " . is_numeric($f) . "<br>";

// is_int()

// $a = 32;
// $a = 0;
// $a = 32.5;
// $a = true;
// $a = "null";
// echo is_int($a);

// is_bool()

// $a = 1;
// $b = 0;
// $b = true;
// $b = false;
// echo is_bool($b);

// gettype()

// $a = 3;
// $a = 3.2;
// $a = "Hello";
// $a = array();
// $f = NULL;
// $g = false;
// echo gettype($g);

// intval()

// $a = 32;
// $a = 3.2;
// $a = "32.5";
// $d = array();
// $d = array("green","red","pink");
// echo intval($d);

// $t = time();
// $d = date("d-F-Y l",$t);
// echo $d;

// $m = microtime(false);
// echo $m;

// strtotime

// echo strtotime("now");
// echo strtotime("10th September 2026");
// echo strtotime("+1 day");
// echo strtotime("+1 week");

// Q1. Current Timestamp
// echo time();

// Q2. Expiry Time
// $currentTime = time();

// echo date("d-m-Y");

// Display Current Day

// echo date("l");

// get_class

// class gfg{
//     public function geeks()
//     {
//         echo "Class name: ". get_class($this);
//     }
// }

// $obj = new gfg();
// $obj->geeks();


// class gfg{
//     public $data1;
//     public $data2;
//     public $data3;
// }

// if(class_exists("gfg")){
//     $id = new gfg();
//     echo "Class name: ".get_class($id);
// }

// class_exists

// class gfg{
//     public $data1;
//     public $data2;
//     public $data3; 
// }

// if(class_exists("gfg")){
//     $id = new gfg();

//     $id->data1 = "Geeks";
//     $id->data2 = "for";
//     $id->data3 = "Geeks";

//     echo "$id->data1";
// }

// $id = new gfg();

// if(is_object($id)){
//     echo "Its object";
// }

// method_exists

// class Employee{
//     public function display()
//     {
//         echo "Employee";
//     }
// }

// $obj = new Employee();

// if(method_exists($obj,"display")){
//     echo "Method found";
// }

// if(!method_exists($obj,"delete")){
//     echo "No method found";
// }

// What about built-in PHP functions?

// if(function_exists("display")){
//     echo "Method exists";
// }

// function gfg($val){
//     echo "This is the $val site.\n";
// }

// call_user_func("gfg","Jarvis");

// namespace geeks;

// class GFG{
//     static function demo(){
//         echo "This is the demo of website";
//     }
// }


// $className = "geeks\GFG";
// call_user_func($className .'::demo');
// $id = new GFG();
// call_user_func(array($id,'demo'));

// class User{
//     public function display()
//     {
//         echo "user display";
//     }
// }

// class User{
//     static function display()
//     {
//         echo "user display";
//     }
// }

// function add($a,$b)
// {
//     return $a+$b;
// }


// $obj = new User();


// $func = "strlen";

// echo call_user_func($func,"Hardik");
function createUser() {
    echo "User Created";
}

function deleteUser() {
    echo "User Deleted";
}

function add($a,$b){
    return $a+$b;
}

// $action = "deleteUser";
// call_user_func($action);

// echo call_user_func_array(
//     "add",
//     [10,20]
// );
// $foo = function ($id, $name){
//     echo "$id - $name";
// };




// if(is_callable($foo)){
//     $foo('1',"test");

// }
// call_user_func_array("createEmployee",[101,"Hardik"]);

// class User{
//     public function display()
//     {
//         echo "Display";
//     }
// }
// $obj = new User();

// var_dump(is_callable([$obj,"display"]));

// md5

// $a = "Hello World";
// echo md5($a);

// $id = uniqid("abc asd dsa");
// echo $id;

// parse_url

// $url = 'https://www.geeksforgeeks.org/category/php/#basics';

// echo "<pre>";
// var_dump(parse_url($url));
// var_dump(parse_url($url,PHP_URL_SCHEME));
// var_dump($url,PHP_URL_HOST);
// var_dump($url,PHP_URL_PATH);

// define("const_key","value for the keys");
// echo defined("const_key");

// urlencoded

// $a = urlencode("https://write.geeksforgeeks.org/");
// $b = urldecode($a);

// echo $b;

// defined()

// define("constant_key","value for something is constant");

// if(defined("constant_key")){
//     echo "This key word is present";
// }

// Version compare 
// $phpVersion = "8.1.15";
// $required = "8.2.0";
// echo version_compare($phpVersion,$required);

// if(version_compare(PHP_VERSION,"8.2.0",">=")){
//     echo "Install package";
// }else{
//     echo "Upgrade package";
// }

// $installed = "2.1.4";
// $latest = "2.3.0";

// if(version_compare($installed,$latest)){
//     echo "Update available";
// }

// extension_loaded

// if(extension_loaded("mysqli")){
//     echo "Mysql available";
// }

// if(extension_loaded("curl")){
//     echo "Install curl extension";
// }

// error_reporting(E_ALL);

// echo error_reporting(E_ALL);
// echo error_reporting(E_ERROR);

// echo ini_get("upload_max_filesize");
// echo ini_get("max_execution_time");

// if(extension_loaded("mysqli")){
//     echo "Mysql available";
// }

// mysqli
// curl
// gd
// openssl
// mbstring

// if(extension_loaded("openssl")){
//     echo "Its available";
// }

// All errors
// error_reporting(E_ALL);

// hide all errors
// echo error_reporting(0);

// ini.get
// $memory_limit = ini_get('memory_limit');
// echo $memory_limit;

// if(extension_loaded("mysqli"))
// {
//     echo "extension is there";
// }

// if(extension_loaded("curl"))
// {
//     echo "Curl is present in it";
// }

// header

// header("Location: https://www.geeksforgeeks.org");
// exit();

// header("Expires: Sun, 25 Jul 1997 06:02:34 GMT");
// header("Cache-Control: no-cache");
// header("Pragma: no-cache");

// echo "<pre>";
// print_r(headers_list());

// header("HTTP/1.1 404 Not Found");

// ob_start();

// function callback($buffer){
//     return strtoupper($buffer);
// }

// ob_start("callback");
// echo "Hello Geeks";
// ob_end_flush();

// function foo()
// {
//     $arg_list = func_get_args();
//     var_dump($arg_list);
// }

// foo(12,23,34);

// function foo()
// {
//     $numargs = func_num_args();
//     echo "Number of arguments: $numargs\n";
    
//     $arg_list = func_get_args();
//     for($i=0; $i<sizeof($arg_list); $i++)
//     {
//         echo "Arguments $i is: ".$arg_list[$i]."\n";
//     }
// }

// foo(12,23,34,45,56);