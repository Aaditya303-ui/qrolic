<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "practice";
$port = 3307;

// connect
$conn = mysqli_connect($host,$user,$pass,$dbname,$port);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
// echo "Connected successfully";

// create DB
// $sql = "CREATE DATABASE mydb";

// if(mysqli_query($conn,$sql)){
//     echo "Database created successfully";
// }

// Insert Db
// $sql = "INSERT INTO MyGuests(firstname,lastname,email) VALUES ('jason', 'rou', 'jason@example.com')";

// if(mysqli_query($conn,$sql)){
//     echo "Insertion done successfully";
// }

// last id:
// $last_id = mysqli_insert_id($sql);

// multiple insertion

// $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES
// ('Jos', 'butler', 'jos@example.com'),
// ('moeen', 'ali', 'moeen@example.com'),
// ('chris', 'woakes', 'chris@example.com')";

// if(mysqli_multi_query($conn,$sql)){
//     echo "success";
// }

// select 

$sql = "SELECT * FROM MyGuests";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

    // mysqli_fetch_assoc
    // while($row = mysqli_fetch_assoc($result)){
    //     echo "<pre>";
    //     print_r($row);
    // }

    // msqli_fetch_all
    // while($row = mysqli_fetch_all($result)){
    //     echo "<pre>";
    //     print_r($row);
    // }

    // mysqli_fetch_row
    // $row = mysqli_fetch_row($result);
    // echo "<pre>";
    // print_r($row);

    // mysqli_fetch_array
    // while($row = mysqli_fetch_array($result)){
    //     echo "<pre>";
    //     print_r($row);
    // }

    // mysqli_fetch_field
    // $row = mysqli_fetch_field($result);
    // echo "<pre>";
    // print_r($row);

    // mysqli_fetch_fields
    // $row = mysqli_fetch_fields($result);
    // echo "<pre>";
    // print_r($row);

    // mysqli_fetch_field_direct()
    // $row = mysqli_fetch_field_direct($result,true);
    // echo "<pre>";
    // print_r($row);

    // mysqli_fetch_field_direct()
    // $row = mysqli_fetch_row($result);
    // echo "<pre>";
    // print_r($row);

    // mysqli_fetch_length
    // $count = mysqli_fetch_lengths($result);
    // echo $count;

    // mysqli_fetch_object
    // $row = mysqli_fetch_object($result);
    // echo $row->firstname;

    // mysqli_field_count
    $row = mysqli_field_count($conn);
    echo $row;
}
