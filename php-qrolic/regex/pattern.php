<?php 

// Level 1: Single Character Matching

// Q1 Match any lowercase letter. a,z,m
// $str = '/^[a-z]$/';

// Q2 Match any uppercase letter.
// $str = '/^[A-Z]$/';

// Q3 Match any digit.
// $str = '/^[0-9]$/';

// Q4 Match any lowercase or uppercase letter.
// $str = "/[A-z]/";

// Q5 String must start with:.
// $str = "/^php/";

// Q6 String must end with:
// $str = "/php$/";

// Q7 Match ONLY:
// $str = '/^php$/';

// Q8 3 uppercase letter
// $str = '/^[A-Z]{3}$/';

// Q1: Employee ID
// Starts with EMP Followed by exactly 4 digits

// preg match

// Q1 — Employee ID Validator

// $empId = "EMP1234";
// $pattern = "/EMP[0-9]{4}/";

// if(preg_match($pattern,$empId)){
//     echo "True";
// }else{
//     echo "false";
// }

// Q2 — Username Validation

// $pattern = "/^[a-z][a-z\d].{6,12}/";
// $username = "aaditya1";

// if(preg_match($pattern,$username)){
//     echo "true";
// }else{
//     return "false";
// }

// Q3 — Strong Password Checker

// $pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*[\d])(?=.*[\W]).{8,}/";
// $password = "Admin@123";

// if(preg_match($pattern,$password)){
//     echo "Strong Password";
// }else{
//     echo "weak password";
// }

// preg_match_all

// Question 1 — Extract All Digits

// $str = "Order123 Amount456 Tax789";
// $pattern = "/\d+/";
// preg_match_all($pattern,$str,$matched);

// echo "<pre>";
// print_r($matched);

// Question 2 — Count All Special Characters

// $str = "Admin@123#2026$";
// $pattern = "/\W/";
// preg_match_all($pattern,$str,$matched);
// echo "<pre>";
// print_r($matched);

// Question 3 — Extract All Employee IDs

// $str = "EMP1234 EMP5678 EMP9999";
// $pattern = "/EMP[0-9]{4}/";
// preg_match_all($pattern,$str,$matched);
// echo "<pre>";
// print_r($matched);

// Question 4 — Find All Words Starting With A
// $pattern = "/\b^A[a-z]*/";
// $str = "Aaditya Apple Mango Ajay Banana";

// preg_match_all($pattern,$str,$matched);

// echo "<pre>";
// print_r($matched);

// Question 5 — Count Spaces

// $str = "PHP Laravel MySQL React";
// $pattern = "/\s/";

// preg_match_all($pattern,$str,$matched);

// echo count($matched[0]);

// q7 
// $str = "Apple ₹500 Banana ₹200 Mango ₹100";
// $pattern = "/\d+/";

// $c = preg_split($pattern,$str);

// echo "<pre>";
// print_r($c);

$input = [
"Red",
"Pink",
"Green",
"Blue",
"Purple"
];

$result = preg_grep("/^p/i", $input);
print_r($result);


