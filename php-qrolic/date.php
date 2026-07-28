<?php

// Question 1: Current Date
// echo date('d-m-Y');

// Question 2: Current Time
// $t = date('H:i:s');

// Question 3: Current Day Name
// $t = date('D');

// Question 4: Greeting System
// $t = date("H");

// if($t >= 5 && $t <= 11){
//     echo "Good Morning <br>";
// }elseif($t >= 12 && $t <= 16){
//     echo "Good Afternoon <br>";
// }elseif($t >= 17 && $t <= 20){
//     echo "Good Evening <br>";
// }else{
//     echo "Good Night <br>";
// }

// Question 5: Age calculator

// $birthdate = '2003-12-06';
// $currentdate = date('Y-m-d');
// $birth_date_obj = new DateTime($birthdate);
// $curr_date_obj = new DateTime($currentdate);
// $diff = $curr_date_obj->diff($birth_date_obj);
// $age_year = $diff->y;
// echo "Age: $age_year years";

echo date_default_timezone_get();
