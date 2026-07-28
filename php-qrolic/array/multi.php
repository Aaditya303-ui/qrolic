<?php

// Question 1: Display All Students

$students = [
    [
        "id" => 1,
        "name" => "Rahul",
        "marks" => 80
    ],
    [
        "id" => 2,
        "name" => "Aaditya",
        "marks" => 95
    ],
    [
        "id" => 3,
        "name" => "Priya",
        "marks" => 70
    ]
];

// foreach($students as $k => $v){
//     $id = $students[$k]['id'];
//     $name = $students[$k]['name'];
//     $marks = $students[$k]['marks'];

//     echo "ID: $id <br>";
//     echo "Name: $name <br>";
//     echo "Marks: $marks <br>";

//     echo "<br>";
// }

// Question 2: Find Student By ID

// $searchId = 2;

// foreach($students as $k => $v){
//     $id = $students[$k]['id'];
//     $name = $students[$k]['name'];
//     if($searchId == $id){
//         echo $name;
//     }
// }

// 

$students = [
    [
        "id"=>1,
        "name"=>"Rahul",
        "marks"=>80
    ],
    [
        "id"=>2,
        "name"=>"Aaditya",
        "marks"=>95
    ],
    [
        "id"=>3,
        "name"=>"Priya",
        "marks"=>35
    ]
];

for($i=0; $i < count($students); $i++) { 
    $id = $students[$i]['id'];
    
    if($id == 2){
        print_r($students[$i]);
    }
}