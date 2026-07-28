<?php

// 1. User Bio Preview

// $user = "I am a PHP developer currently learning Laravel and React.";
// echo substr($user,0,25);

// 2. Clean Search Input

// $work = "    PHP Developer    ";
// echo trim($work);

// 4. Find Email Domain

// $email = "hardik@gmail.com";
// $i = strpos($email,"gmail.com");
// $name = substr($email,$i);
// echo $name;

// 5. Welcome Message

// $letter = "hARDIK";
// $convert = strtolower($letter);
// $update = ucfirst($convert);
// echo $update;

// Remove Trailing Slash

// $web = "https://example.com/";
// $work = rtrim($web,"/");
// echo $work;

// Detect Last Occurrence

// $path = "uploads/users/profile.jpg";
// $pos = strrpos($path,"/");
// $sub = substr($path,$pos);
// echo $sub;

// 8. Safe Comment Display

// $script = "<script>alert('Hacked')</script>";
// echo htmlspecialchars($script);

// 9. Generate Invoice Separator

// echo str_repeat("=",10);

// 10. Reviewer-Level Bonus

// $string = "Mr. John Doe";

// echo strtr($string,"Mr.","Dr.");

// Search Optimization
// $input = "   iPhone 16 Pro   ";
// $trim = trim($input);
// $lcase = strtolower($trim);
// echo $lcase;

// Product Description Preview

// User Profile Name Formatting

// $input = "HARDIK";
// $i = strtolower($input);
// $uc = ucfirst($i);
// echo $uc;

// Email Domain Analytics
// $i = "hardik@gmail.com";
// $pos = strpos($i,"gmail.com");
// $sub = substr($i,$pos);
// echo $sub;

// $i = "<h1>Hello world</h1>";
// echo htmlspecialchars($i);

// function arrayCalling($a)
// {
//     foreach($a as $k => $v){
//         echo "$a";
//     }
// }

// $a = array("a"=>25,"b"=>34);
// echo implode(" - ",array_values($a));

// $map = array_map(fn($k,$v) => "$k => $v",array_keys($a),$a);
// print_r($map);
// $enc = json_encode($a);
// echo $enc;

// $dec = json_decode($enc,true);
// echo "Decoded version: ".implode(" , ",$dec);