<?php
$host = "localhost";
$user = "root";
$pass = "";
$port = 3307;
$db = "practice";

$conn = new mysqli($host,$user,$pass,$db,$port);
$sql = "SELECT * FROM myguests";
$query = $conn->query($sql);

// fetch_all() MYSQLI_NUMS 2d array by default

// $data = $query->fetch_all();

// for($i=0; $i<sizeof($data); $i++){
//     $id = $data[$i][0];

//     if($id == 4){
//         echo "<pre>";
//         print_r($data[$i]);
//         break;
//     }
// }

// for($i=0; $i<sizeof($data); $i++){
//     echo "<pre>";
//     print_r($data);
// }

// fetch_array() MYSQLI_BOTH: By default

// $data = $query->fetch_array();

// for($i=0; $i<sizeof($data); $i++){
//     echo "<pre>";
//     print_r($data);
// }

// $data = $query -> fetch_row();
// echo "<pre>";
// print_r($data);

// fetch_assoc

// while($data = $query->fetch_assoc()){
//     echo "<pre>";
//     print_r($data);
// }

if($stmt = $conn->prepare($sql)){
    $stmt->bind_param("sss",$firstname,$lastname,$email);

    $firstname = "Hardik";
    $lastname = "Pandya";
    $email = "hardik@gmail.com";
    
    $stmt->execute();
}