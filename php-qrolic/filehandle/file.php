<?php

// Question 1: Read Student Names (r)

// $file = fopen("students.txt",'r');

// if($file){
//     while(($line = fgets($file)) !== false){
//         echo "<pre>";
//         print_r($line);
//     }
// }

// fclose($file);

// Question 2: Count Total Students (r)

// $file = fopen("students.txt",'r');

// $count = 0;

// if($file){
//     while(($line = fgets($file)) !== false){
//         $count++;
//     }
// }

// echo $count;

// Question 3: Search Student Name (r)

// $file = fopen("students.txt",'r');
// $search = "Aaditya";

// $i=0;
// if($file){
//     while(($line = fgets($file)) !== false){
//         $cleanLine = trim($line);
//         if($cleanLine == $search){
//             echo "Found at index: $i";
//             break;
//         }
//         $i++;
//     }
// }

// Question 4: Attendance Report (r)

// $file = fopen("students.txt",'r');
// $pcount = 0;
// $acount = 0;

// while(($line = fgets($file)) !== false){
//     $nl = trim($line);
//     if($nl == "P"){
//         $pcount++;
//     }else{
//         $acount++;
//     }
// }

// echo $acount;

// Question 5: Read and Update Counter (r+)

// $file = fopen("newFile.txt",'r+');

// if($file){
//     $currentValue = fgets($file);
//     $newValue = $currentValue + 1;
//     fwrite($file,$newValue);
//     fclose($file);
// }

// w and w+

// $file = fopen('student.txt','w');

// if($file){
//     $students = ["Rahul","Aaditya","Priya","Neha"];

//     foreach($students as $s){
//         fwrite($file,$s.PHP_EOL);
//     }
//     fclose($file);
// }

// Question 2: Daily Report Generator (w)

// $file = fopen("report.txt",'w');

// if($file){
//     $d1 = "Total Students: 50";
//     fwrite($file,$d1.PHP_EOL);
//     $d2 = "Present: 45";
//     fwrite($file,$d2.PHP_EOL);
//     $d3 = "Absent: 5";
//     fwrite($file,$d3.PHP_EOL);
// }

// Question 3: Employee Salary Slip (w)

// $file = fopen("salary.txt",'w');
// $employee = "Rahul";
// $sal = 50000;
// $bonus = 5000;
// $total = $sal + $bonus;

// if($file){
//     fwrite($file,"Employee: $employee".PHP_EOL);
//     fwrite($file,"Salary: $sal".PHP_EOL);
//     fwrite($file,"Bonus: $bonus".PHP_EOL);
//     fwrite($file,"Total Amt: $total".PHP_EOL);
// }

// Question 5: Student Registration System (w+)

// $file = fopen("student.txt",'w+');

// if($file){
//     $str = "Name: Aaditya,
//             Course: CE,
//             City: Rajkot";
//     $arr = explode(",",$str);
//     foreach($arr as $a){
//         fwrite($file,$a.PHP_EOL);
//     }
//     // rewind($file);

//     while(($line = fgets($file)) !== false){
//         echo "<pre>";
//         print_r($line);
//     }
// }

// Question 7: Login Log Generator (w)

// $file = fopen("student.txt",'w+');

// $name = "Rahul";
// $date = date("d-m-Y H:i:s");

// if($file){
//     fwrite($file,"Name: $name".PHP_EOL);
//     fwrite($file,"Date: $date".PHP_EOL);
// }

// Question 8: Marksheet Creator (w+)

// $file = fopen('marksheet.txt','w+');
// $name = "Priya";
// $arr = [
//     [
//         "subject" => 'Maths',
//         "marks" => 80
//     ],
//     [
//         "subject" => 'Science',
//         "marks" => 70
//     ],
//     [
//         "subject" => 'English',
//         "marks" => 90
//     ]
// ];
// $total = 0;
// fwrite($file,"Name: $name".PHP_EOL);
// foreach($arr as $k => $v){
//     $mark = $arr[$k]['marks'];
//     $sub = $arr[$k]['subject'];
//     $total = $total + $mark;

//     fwrite($file,"$sub: $mark".PHP_EOL);

//     rewind($file);
// }
// fwrite($file,"Total: $total".PHP_EOL);

// Question 10: Final Internship Challenge

// $file = fopen("attendance.txt",'w+');

// $total = 0;
// $acount = 0;
// $pcount = 0;

// $students = [
//     "Rahul" => "Present",
//     "Priya" => "Absent",
//     "Aaditya" => "Present",
//     "Neha" => "Present"
// ];

// foreach($students as $name => $status){
//     fwrite($file,"$name - $status".PHP_EOL);
// }

// if($file){
//     rewind($file);
//     while(($line = fgets($file)) !== false){
//         $total++;

//         if(str_contains($line,"Present")){
//             $pcount++;
//         }else{
//             $acount++;
//         }
//     }
// }

// echo "Total students are: $total <br>";
// echo "Absent students are: $acount <br>";
// echo "Present students are: $pcount <br>";

// a

// Question 1: Student Registration System (a)

// $file = fopen("student.txt",'a');

// $newStudent = "Aaditya";
// $str = trim($newStudent);

// fwrite($file,$str.PHP_EOL);

// Question 3: Login History (a)

// $username = "Rahul";
// $file = fopen("student.txt",'a');
// fwrite($file,"$username logged in");

// Question 4: Attendance System (a)

// $d1 = "ks- Present";
// $d2 = "Abhi - Absent";

// $file = fopen("attendance.txt",'a+');
// fwrite($file,$d1.PHP_EOL);
// fwrite($file,$d2.PHP_EOL);

// rewind($file);

// while(($line = fgets($file)) !== false){
//     echo "<pre>";
//     print_r($line);
// }

// Question 7: Final Internship Challenge (a+)

// $d1 = "2026-08-08 10:30:15";
// $d2 = "2026-08-08 11:15:42";
// $d3 = "2026-08-08 12:01:03";

// $file = fopen("visitors.txt",'a+');

// fwrite($file,$d1.PHP_EOL);
// fwrite($file,$d2.PHP_EOL);
// fwrite($file,$d3.PHP_EOL);

// rewind($file);
// $count = 0;
// while(($line = fgets($file)) !== false){
//     $count++;
// }

// echo $count;

// Question 1: Create Student File (x)

// $file = fopen("studentss.txt",'x+');

// if($file){
//     fwrite($file,"Rahul".PHP_EOL);
//     rewind($file);
//     while(($line = fgets($file)) !== false){
//         if($line != "Rahul"){
//             print_r($line);
//         }else{
//             echo "Rahul existed in data";
//         }
//     }
// }

// $myfile = fopen('gfg.txt','w');
// echo fputs($myfile,"Geeksforgeeks is a portal of geeks!");
// fclose($myfile);

// $myfile = fopen('gfg.txt','r');
// fseek($myfile,3);
// echo fgetc($myfile);


