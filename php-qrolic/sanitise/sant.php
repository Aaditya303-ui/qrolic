<?php 

// $email = "geeksforgeeks@gmail.co<m>";
// $nemail = filter_var($email,FILTER_SANITIZE_EMAIL);

// $url = "www.geeksforgeeks.or°g";
// $nurl = filter_var($url,FILTER_SANITIZE_URL);

// $string = "<h1>GeeksforGeeks Portal</h1>";
// $nstr = filter_var($string,FILTER_SANITIZE_STRING);

$num = 500;

echo (!filter_var($num,FILTER_SANITIZE_NUMBER_INT) == false) ? "Valid" : "In Valid";
