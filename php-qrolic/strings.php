<?php

// Question 1: Employee ID Formatter
// $employeeId = "emp123";
// $up = strtoupper($employeeId);

// echo $up;

// Question 2: Login Email Cleanup

// $email = "   AADITYA@GMAIL.COM   ";
// $trim = trim($email);
// $updated = strtolower($trim);

// echo $updated;

// Question 3: Product Search
// $product = "Apple iPhone 16 Pro";
// $search = "iphone";

// if(str_contains($product,$search)){
//     echo "Product found";
// }

// Question 4: Username Generator
// $name = "Virat Kohli";
// $new = str_replace(" ","_",$name);
// echo $new;

// Question 5: Empty Comment Checker
// $comment = "      ";
// $trim = trim($comment);

// if($trim == ""){
//     echo "Comment is required";
// }

// Question 6: Password Strength Checker
// $password = "admin";
// $len = strlen($password);

// if($len < 8){
//     echo "Weak password";
// }else{
//     echo "Strong password";
// }

// Question 7: Mobile Number Validation
// $phone = "9876543210";
// $len = strlen($phone);

// if($len == 10){
//     echo "Valid number";
// }else{
//     echo "InValid number";
// }

// Question 8: Name Length Checker
// $name = "Aaditya";
// $len = strlen($name);

// echo $len;

// Question 9: Extract Email Username
// $email = "aaditya@gmail.com";
// $arr = explode("@",$email);

// $name = $arr[0];

// echo $name;

// Question 10: Extract File Extension
// $file = "resume.pdf";
// $arr = explode(".",$file);
// $ext = $arr[1];

// echo $ext;

// Question 11: Date Breakdown
// $date = "2026-08-05";
// $arr = explode("-",$date);
// echo "<pre>";
// print_r($arr);

// Question 12: Mask Aadhaar Number
// $aadhaar = "123412341234";
// $l4 = substr($aadhaar,-4);
// $mask = str_repeat("*",8);
// $masked = "$mask$l4";
// echo $masked;

// Question 13: Mask Email
// $email = "aaditya@gmail.com";
// $arr = explode("@",$email);
// $name = $arr[0];
// $domain = $arr[1];
// $sub = substr($email,3,4);
// $rep = str_repeat("*",4);
// $name_sub = substr($name,0,3);

// $masked = "$name_sub $rep @ $domain";
// echo $masked;

// Question 14: Mask Credit Card
// $card = "1234567812345678";
// $sub = substr($card,-4);
// $rep = str_repeat("*",8);
// echo "$rep$sub";

// Question 15: URL Slug Generator
// $title = "Learn PHP From Scratch";
// $new = str_replace(" ","-",$title);
// $lower = strtolower($new);
// echo $lower;

// Question 16: Tag System
// $tags = "php,mysql,laravel,react";
// $arr = explode(",",$tags);

// foreach($arr as $a){
//     echo $a ."<br>";
// }

// Question 17: Product Code Validator
// $productCode = "PRD-12345";

// if(str_starts_with($productCode,"PRD")){
//     echo "Product is valid";
// }

// Question 18: User Registration Processor

// $name = "   Aaditya Jadeja   ";
// $email = "AADITYA@GMAIL.COM";
// $skills = "PHP,Laravel,MySQL,React";

// $trim = trim($name);
// $email = strtolower($email);
// $arr = explode(",",$skills);

// $count = count($arr);
// echo $count;


// str_replace()

// Question 1: Replace a Name

// $name = "Hello Rahul";
// $rep = str_replace("Rahul","Aaditya",$name);
// echo $rep;

// Question 2: Censor a Bad Word
// $message = "You are stupid";
// $rep = str_replace("stupid","******",$message);
// echo $rep;

// Question 3: Convert Date Format
// $date = "08-08-2025";
// $rep = str_replace("-","/",$date);
// echo $rep;

