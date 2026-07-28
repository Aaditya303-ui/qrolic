<?php
$host = "localhost";
$user = "root";
$port = 3307;
$pass = "";
$db = "practice";

$conn = new mysqli($host,$user,$pass,$db,$port);
$sql = "Select * from myguests";
$query = $conn->query($sql);

// 1

while($data = $query->fetch_assoc()){
    $id = $data['id'];
    $fname = $data['firstname'];
    $lname = $data['lastname'];
    $email = $data['email'];

    echo "$id $fname $lname";
    echo "<br>";
}

// 2

while