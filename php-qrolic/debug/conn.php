<?php

mysqli_report(MYSQLI_REPORT_OFF);

$host = "localhost";
$user = "root";
$pass = "";
$db = "practice";
$port = 3307;

$conn1 = mysqli_connect($host,$user,$pass,$db,$port);

$sql = "SELECT * FROM myguests";

$query = mysqli_query($conn1,$sql);

if(!$query){

    $error = mysqli_error($conn1);

    error_log(
        "[" . date('Y-m-d H:i:s') . "] " .
        $error . PHP_EOL,
        3,
        "php-error.log"
    );

    echo $error;
}