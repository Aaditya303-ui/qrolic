<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "practice";
$port = 3307;

$conn1 = mysqli_connect($host,$user,$pass,$db,$port);
$sql = "SELECT * FROM myguests";
$query = mysqli_query($conn1,$sql);

// $conn2 = new mysqli($host,$user,$pass,$db,$port);
// $sql = "SELECT * FROM myguests";
// $query = $conn2->query($sql);

// $conn3 = new PDO("mysql:host=$host;dbname=$db;port=$port", $user, $pass);
// $sql = "SELECT * FROM myguests";
// $stmt = $conn3->prepare($sql);

// $query = $stmt->execute();

// if($query){
//     echo "Connecti";
// }
