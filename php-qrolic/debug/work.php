<?php

mysqli_report(MYSQLI_REPORT_OFF);

$host = "localhost";
$user = "root";
$pass = "";
$port = 3307;
$db = "practice";

$conn = new mysqli($host,$user,$pass,$db,$port);

$sql = "SELECT * FROM myguests";
$query = $conn->query($sql);

if(!$query){
    $error = mysqli_error($conn);
    error_log($error.PHP_EOL,3,"php-error-log.log");
}