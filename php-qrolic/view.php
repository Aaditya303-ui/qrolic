<?php 
namespace gfg;

// function foo()
// {
//     $num_args = func_num_args();
//     $arg_list = func_get_args();
//     var_dump($arg_list);
//     echo $num_args;
// }

// foo(12,23,34,45);

// md5(): Converts the string into hash format

// $str = "abcde";
// Hex character: 16 digits default false
// $hex = md5($str);

// bin chars when its true
// $bin = md5($str,true);

// echo $bin;

// echo uniqid();

// $url = parse_url("https://www.geeksforgeeks.org/",PHP_URL_PATH);
// echo "<pre>";
// print_r($url);

// urlencode

// $url = "https://www.geeksforgeeks.org/";
// $encode = urlencode($url);
// echo $encode;

// defined

// const HELLO = " Hello are you ";

// if(defined("HELLO")){
//     echo 1;
// }

// if(version_compare(PHP_VERSION,'7.0.0','>=')){
//     echo "Needs upgrade to latest";
// }

// $version = ini_get("max_execution_time");
// echo $version;

// $version = ini_set("max_execution_time",100);

// if(extension_loaded("mysqli")){
//     echo "This is present";
// }

// header("Expires: Sun, 25 Jul 1997 06:02:34 GMT");
// header("Cache-Control: no-cache");
// header("Pragma: no-cache");

// print_r(headers_list());

// function callback($buffer)
// {
//   // replace all the apples with oranges
//   return (str_replace("apples", "oranges", $buffer));
// }

// ob_start("callback");
?>

<!-- <html>
<body>
<p>It's like comparing apples to oranges.</p>
</body>
</html> -->
<?php
// ob_end_flush();
// ob_start();
// print "Php is output buffering";

// class Abc{
//     public function work()
//     {
//         echo "hello how are you";
//     }
// }

// $a = new Abc();

// echo get_class($a);

// if(class_exists("Abc")){
//     echo "Present";
// }

// echo is_object($a);
// if(method_exists($a,"work")){
//     echo "This is present";
// }

// if(function_exists("strlen")){
//     echo "present";
// }

// function gfg($val){
//     echo "This is $val";
// }

// call_user_func("gfg","geeksforgeek");
// call_user_func("gfg","content");

// class gfg{
//     static function demo(){
//         print "GeeksForGeeks\n";
//     }
// }

// call_user_func(__NAMESPACE__."\gfg::demo");
// call_user_func(array(__NAMESPACE__."\gfg","demo"));

// $func = "str_replace";
// $params = array("Monkey","giraffes","Hundreds and Thousands of Monkey\n");
// $output_array = call_user_func_array($func,$params);
// echo $output_array;

// class abc {

//     public function box($h,$d,$w){
//         $area = $h*$d*$w;
//         echo $area;
//     }

//     public function show(...$a){
//         for( $i = 0; $i < count($a); $i++ ){
//             echo $a[$i] ." <br>";
//         }
//     }
// }
// // $a = new abc();
// call_user_func_array([$a,"box"],array("w"=>23,"d"=>34,"h"=>33));
// call_user_func_array([$a,"show"],array(12,23,34,45));

// function foo(){
//     $new = func_get_args();
//     var_dump($new);
// }
// foo(12,23,34);

// $display = date("d-m-Y");
// $time = date("h:i:s");
// $day = date("l");
// $m = date("F");
// $str = strtotime(1754559200);
// $tom = time()+24*60*60;
// $day = date("d F",$tom);
// $nsunday = strtotime("next sunday");
// $sun = date("d F",$nsunday);

// echo "$sun next day";
// echo gettype($sun);
// echo $m;
// echo $day;
// echo $time;
// echo $display;

// $a = 5;       
// $b = 5.34;    
// $c = "hello"; 
// $d = true;    
// $e = NULL;    

// echo is_string($c);
// echo is_null($e);
// echo is_int($b);

// $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
// $str = 'GeeksforGeeks';
// echo base64_encode($str);
// $jsondata = json_encode($age,JSON_PRETTY_PRINT);
// $decode = json_decode($jsondata,true);
// echo "<pre>";
// print_r($decode);
// $arr = serialize($age);
// echo "<pre>";
// print_r($arr);

// if(file_exists("work.txt")){
//     echo "file is there";
// }

// set_include_path("functions");
// $content = file_get_contents("serialise.txt",true);
// echo $content;

// file_put_contents("dc.txt","Hello How are you \n welcome rishabh");
// set_include_path("functions");
// file_put_contents("dc.txt","\nRoar macha",FILE_APPEND,true);

// $file = fopen("work.txt",'r');
// $new_file = fopen("doit.txt",'w');

// while(($data = fgets($file)) !== false){
//     fwrite($new_file,$data);
// }

// echo basename("qrolic/work.txt");

// echo dirname("user01/geeksforgeeks/gfg.txt");
// echo realpath("work.txt");

// mkdir("test");


// echo substr("Hello World",1,6);
$a = "<h1>hello world</h1>";
// echo str_replace("World","Aaditya",$a);
// echo strlen($a);
// echo strpos($a,"World");
// $n = 9;
// $str = "Rajkot";
// $txt = sprintf("There is %u million of people in %s",$n,$str);
// echo $txt;

// echo strtolower($a);
// echo strtoupper($a);

// echo rtrim($a,".");

// echo strtoupper($a);
// echo ltrim($a,".");

// echo ucfirst($a);
// echo strripos($a,"w");
// echo htmlspecialchars($a);

// echo filter_var("<h1>Hello How are you</h1>",FILTER_SANITIZE_STRING);
// echo filter_var(129.0.0.1,FILTER_VALIDATE_IP) == false;

// $url = "https://www.geeksforgeeks.org/";
// echo filter_var($url,FILTER_SANITIZE_URL);

// $array1 = array(12,23,34);
// $array2 = array(45,56,67,78);
// $arr = array_merge($array1,$array2);

// $assoc = array("id"=> 1, "name"=> "abc", "marks"=> 45);

// echo "<pre>";
// print_r(array_keys($assoc));

// function squareIt($a){
//     return $a * $a;
// }

// $new = array_map("squareIt",$array1);
// echo "<pre>";
// print_r($new)

// if(is_array($array)) echo true;

// if(in_array(56,$array)){
//     echo "Present";
// }

// $string = "Hello today i had a pizza";
// $str = explode(" ",$string);
// echo "<pre>";
// print_r($str);

function hello($a)
{
    echo "hello World $a";
}

call_user_func("hello",$a);
?>