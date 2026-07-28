<?php

// preg_match()

// $geeks = 'GeeksforGeeks';
// preg_match('/(Geeks)(for)(Geeks)/', $geeks, $array,PREG_OFFSET_CAPTURE);
// echo "<pre>";
// print_r($array);

// $str = "Visit W3Schools";
// $pattern = '/w3schools/i';
// echo preg_match($pattern,$str);

// preg_match_all

// $str = "The rain in SPAIN falls mainly on the plains.";
// $pattern = '/ain/i';
// echo preg_match_all($pattern,$str);

// ereg_replace()

// # 1
// $original_str = "India To Become World's Fifth Largest Economy In 2018.";
// $replace_str = 5;

// echo mb_ereg_replace("Fifth",$replace_str,$original_str);

// # 2
// $original_string = "Write any topic .";
// $string_pattern = "(.*)any(.*)"; 
// $replace_string = " own yours own \\1biography\\2"; 

// echo mb_ereg_replace($string_pattern,$replace_string,$original_string);

// ergi_replace()

// $text = "PHP is Awesome";
// echo mb_eregi_replace("php", "Laravel", $text);

// preg_match

// $gfg = "GeeksforGeeks.";
// if(preg_match("/(Geeks)(for)(Geeks)/i",$gfg,$match,PREG_OFFSET_CAPTURE)){
//     echo "<pre>";
//     print_r($match);
// }

// $nput = "EMP1234";
// if(preg_match("/^EMP[0-9]{4}$/i",$nput)){
//     echo "Valid id";
// }else{
//     echo "Invalid";
// }

// Question 2: Username Validation
// $username = "aaditya123";
// $pattern = "/^[a-z][a-z0-9]{5,10}$/";

// if(preg_match($pattern,$username)){
//     echo "Valid user";
// }else{
//     echo "Not a valid user";
// }

// Question 3: Product Code Validation
// $productCode = "PRD-12345";
// $pattern = "/^PRD-[0-9]{5}$/";

// if(preg_match($pattern,$productCode)){
//     echo "Valid working";
// }else{
//     echo "Invalid";
// }

// Question 4: File Upload Validation
// $fileName = "resume.pdf";

// preg_match_all

// Question 1: Count Vowels
// $str = "Hello World";
// $pattern = "/[aeiou]/i";

// echo preg_match_all($pattern,$str);

// Question 2: Count Digits

// $str = "Order123Amount456";
// $pattern = "/\d$/";

// preg_match_all($pattern,$str,$matches);
// echo "<pre>";
// print_r($matches);

// Question 3: Count Uppercase Letters
// $str = "PHP Laravel MYSQL";
// $pattern = "/[A-Z]/";
// preg_match_all($pattern,$str,$matches);
// echo count($matches[0]);

// Question 4: Extract All Prices
// $str = "Apple ₹500 Banana ₹200 Mango ₹100 ₹400";
// $pattern = "/[0-9]*/";
// preg_match_all($pattern,$str,$matches);

// $total = 0;
// $n = count($matches[0]);

// for($i=0; $i<$n; $i++){
//     $total = $total + (int)$matches[0][$i];
// }
// echo $total;
// echo "<pre>";
// print_r($matches);
// echo count($matches[0]);

// Question 5: Count Words Starting with 'p'
// $str = "php python java php laravel perl";
// $pattern = '/^p/i';
// echo preg_match_all($pattern,$str,$matches);

// Question 6: Extract All Emails
// $str = "aaditya@gmail.com test@yahoo.com admin@hotmail.com";
// $pattern = "/[a-z]*@(gmail|yahoo|hotmail).com/";

// preg_match_all($pattern,$str,$array);
// echo "<pre>";
// print_r($array[0]);

// Question 7: Find All Product Codes
// $str = "PRD123 PRD456 ABC123 PRD999";
// $pattern = "/[A-Z]{3}[0-9]{3}/";

// preg_match_all($pattern,$str,$array);
// echo "<pre>";
// print_r($array);

// Question 8: Count Special Characters
// $str = "Hello@123#World$";

// preg_split()

// $str = "This is a text";
// $pattern = "/\s/";
// $comp = preg_split($pattern,$str);
// echo "<pre>";
// print_r($comp);

// 1) split tag

// $tags = "php,laravel,react,nodejs";
// $pattern = "/\W/";
// $comp = preg_split($pattern,$tags);
// echo "<pre>";
// print_r($comp);

// 2) Multiple seperators
// $data = "PHP|Laravel,React;NodeJS";
// $pattern = "/\W/";
// $comp = preg_split($pattern,$data);
// echo "<pre>";
// print_r($comp);

// $employees = "EMP001 EMP002 EMP003 EMP004";
// $pattern = "/\s/";
// $comp = preg_split($pattern,$employees);
// echo "<pre>";
// print_r($comp);

// preg_grep()

// $emails = [
//     "aaditya@gmail.com",
//     "user@yahoo.com",
//     "test@gmail.com",
//     "hello@outlook.com"
// ];
// $pattern = "/^([a-z])+@gmail\.com/";
// $result = preg_grep($pattern,$emails);
// echo "<pre>";
// print_r($result);

// 
?>