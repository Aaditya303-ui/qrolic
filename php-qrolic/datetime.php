<?php

// Example 1: Display Current Date
// echo date("Y-m-d");

// Example 2: Display Current Date and Time
// echo date('d-m-Y H:i:s');

// mktime(h,i,s,m,d,y)
// $d = mktime(18,25,45,10,12,2025);
// echo date("d-m-Y h:i:s",$d);

// strtotime()
// $d = strtotime("7:45 April 6 2026");
// echo date("d-m-Y h:i:s");

// echo date_default_timezone_get();

// $startdate = strtotime("Saturday");
// $enddate = strtotime('+ 6 weeks',$startdate);

// while($startdate < $enddate){
//     echo date("d-m-Y ",$startdate) . "<br>";
//     $startdate = strtotime("+1 week",$startdate);
// }

// Question 1: Greeting System

// $d = date('H');
// echo $d;

// if(($d >= 5) && ($d <= 11)){
//     echo "Good Morning";
// }elseif(($d >= 12) && ($d <= 16)){
//     echo "Good Afternoon";
// }elseif(($d >= 17) && ($d <= 20)){
//     echo "Good evening";
// }else{
//     echo "Good Night";
// }

// Question 2: Weekend Checker

// $d = date("D");

// if(($d == "Sat") && ($d == "Sun")){
//     echo "Weekend";
// }else{
//     echo "Working days";
// }

// Question 3: Office Timing Checker (09:00 AM to 06:00 PM)

// date_default_timezone_set('Asia/Kolkata');

// $currentTime = new DateTime(); 
// $openTime    = new DateTime('09:00 AM');
// $closeTime   = new DateTime('06:00 PM');

// if(($currentTime >= $openTime) && ($currentTime <= $currentTime)){
//     echo "Office open";
// }else{
//     echo "Office close";
// }

// Level 2: Date Comparisons

// $expiryDateString = "2026-12-31";

// $currentTime = new DateTime();
// $expireTime = new DateTime($expiryDateString);
// $expireTime -> setTime(23,59,59);

// if ($currentTime <= $expireTime) {
//     echo "Active";
// } else {
//     echo "Expired";
// }

// Question 5: Event Started?

// $currDate = new DateTime();
// $bornDateString = "2003-12-06";

// $bornDate = new DateTime($bornDateString);
// $bornDate -> setTime(23,59,59);

// $ageDiff = $currDate->diff($bornDate);
// $age = $ageDiff->y;

// echo $age;


// Question 8: Company Experience

// $joiningDate = "2024-06-01";

// $currDate = new DateTime();
// $joinDate = new DateTime($joiningDate);

// $expDiff = $currDate->diff($joinDate);
// $years = $expDiff->y;
// $month = $expDiff->m;
// $days = $expDiff->d;

// echo "$years years $month months $days days";

// Question 9: Days Left Until Birthday

// $currDate = new DateTime();
// $birthDayString = "2026-08-15";

// $birthDay = new DateTime($birthDayString);

// $dayDiff = $currDate->diff($birthDay);
// $days = $dayDiff->days;

// echo $days;

// Question 10: Inactive User Detector

// $lastLoginString = "2026-07-01";

// $currDate = new DateTime();
// $lastLogin = new DateTime($lastLoginString);

// $daysDiff = $currDate->diff($lastLogin);
// $days = $daysDiff->d;

// echo $days;

// if($days <= 30){
//     echo "Keep the account active";
// }else{
//     echo "Account is expired";
// }

// Question 11: Late Employee Checker(doubt)

// $officeTimeString = "09:00:00";
// $empTimeString = "09:18:00";

// $officeTime = new DateTime($officeTimeString);
// $empTime = new DateTime($empTimeString);

// $empDiff = $empTime->diff($officeTime);

// Question 12: Password Expiry System

// $currDate = new DateTime();
// $passwordChanged = "2026-05-01";

// $passDate = new DateTime($passwordChanged);
// $passDiff = $currDate -> diff($passDate);

// $days = $passDiff->days;

// if($days <= 90){
//     echo "Password Valid";
// }else{
//     echo "Password Expired";
// }

// Question 13: Monthly Sales Report (doubt)

// $sales = [
//     ['amount'=>500,'date'=>'2026-08-01'],
//     ['amount'=>700,'date'=>'2026-08-05'],
//     ['amount'=>1200,'date'=>'2026-07-25']
// ];

// Question 14: Find tenure

// $employee = [
//     'joining_date' => '2025-01-10',
//     'contract_end' => '2027-01-10'
// ];

// $joiningDateString = $employee['joining_date'];
// $contractDateString = $employee['contract_end'];

// $joinDate = new DateTime($joiningDateString);
// $contractDate = new DateTime($contractDateString);

// $workDiff = $joinDate->diff($contractDate);
// $days = $workDiff->days;
// $month = $workDiff->m;
// $years = $workDiff->y;

// echo "He worked for $years years $month and $days days";

// Question 15: Final Boss

// $users = [
// [
// 'name'=>'A',
// 'last_login'=>'2026-08-01'
// ],
// [
// 'name'=>'B',
// 'last_login'=>'2026-05-01'
// ],
// [
// 'name'=>'C',
// 'last_login'=>'2026-07-20'
// ]
// ];

// $inActiveUsers = [];
// $active = 0;
// $notActive = 0;

// foreach($users as $k => $v){
//     $lastLoginstr = $users[$k]['last_login'];
//     $AllUsers = $users[$k]['name'];

//     $currDate = new DateTime();
//     $dayForm = new DateTime($lastLoginstr);
//     $daysDiff = $currDate-> diff($dayForm);

//     $days = $daysDiff->days;

//     if($days <= 30){
//         $active++;
//     }else{
//         $notActive++;
//         $inActiveUsers[] = $AllUsers;
//     }
// }


// echo "Active users Count: $active <br>";
// echo "InActive users Count: $notActive <br>";
// echo "<pre>";
// print_r($inActiveUsers);

// Question 1: Current Date & Time

// date_default_timezone_set('Asia/Kolkata');

// $date = date('d-M-Y');
// $time = date('h:i:s');
// $day = date("D");
// $d = strtotime("+7 days");
// $new = date("d-m-Y",$d);

// echo "Date: $date <br>";
// echo "Time: $time <br>";
// echo "Day: $day <br>";
// echo $new;

// Question 2

// $currTime = new DateTime();
// $str = "31 December 2026";
// $tarTime = new DateTime($str);

// $diff_time = $currTime->diff($tarTime);
// echo $diff_time->days;

// echo date_default_timezone_get();

// Question 7: Expired Subscription
// $expiry = "2026-07-01";
// $currDate = new DateTime();
// $expDate = new DateTime($expiry);

// $time_diff = $currDate->diff($expDate);
// echo $time_diff->d;

// Generate Invoice Date

// $invoice_str = "08-08-2025";
// $due_str = "07-09-2025";

// $invoice = new DateTime($invoice_str);
// $due = new DateTime($due_str);

// $diff = $invoice->diff($due);
// echo $diff->days;

// $time = "15 August 2004";
// $age = new DateTime($time);
// $currAge = new DateTime();

// $age_diff = $currAge->diff($age);
// echo $age_diff->y;

// Question 15: Final Boss – Mini Employee Payroll

// $employees = [
//     [
//         "name" => "Rahul",
//         "joinDate" => "2024-01-15"
//     ],
//     [
//         "name" => "Aaditya",
//         "joinDate" => "2025-06-01"
//     ],
//     [
//         "name" => "Priya",
//         "joinDate" => "2023-08-20"
//     ]
// ];

// $currDate = new DateTime();

// foreach($employees as $k => $v){
//     $name = $employees[$k]['name'];
//     $join = $employees[$k]['joinDate'];

//     $joinDate = new DateTime($join);
//     $diff = $currDate -> diff($joinDate);

//     $years = $diff->y;
//     $days = $diff->days;
//     echo "$name of the employee is he spent this much $years years this much $days days<br>";
// }

