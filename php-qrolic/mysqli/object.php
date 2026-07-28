<?php
$host = "localhost";
$username = "root";
$pass = "";
$dbname = "practice";
$port = 3307;

// connect:
$conn = new mysqli($host,$username,$pass,$dbname,$port);

if($conn->connect_errno){
    die("Connection failed: ". $conn->connect_errno);   
}

// create db:
// $sql = "CREATE DATABASE mydb";

// if($conn->query($sql)){
//     echo "Database created successfully";
// }else{

// }

// insert db:
// $sql = "INSERT INTO MyGuests(firstname,lastname,email)
// VALUES ('John', 'Doe', 'john@example.com')";

// last id inserted: 
// $lastId = $conn->insert_id;
// echo $lastId;

// if($conn->query($sql)){
//     echo "Insertion done successfully";
// }else{

// }

// Insert multiple data
// $lastid = $conn->insert_id;

// $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES
// ('joe', 'root', 'josephedward@example.com'),
// ('ben', 'stokes', 'ben@example.com'),
// ('eoin', 'morgan', 'eoin@example.com')";

// if($conn->query($sql)){
//     echo "Insertion done successfully last_id inserted: $lastid";
// }

// Prepared statement
// $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)";

// if($stmt = $conn->prepare($sql)){
//     $stmt->bind_param("sss",$firstname,$lastname,$email);

//     $firstname = "shikhar";
//     $lastname = "Dhawan";
//     $email = "shikhar@gmail.com";

//     $stmt->execute();
// }

// select 
$sql = "SELECT * FROM MyGuests";
$result = $conn -> query($sql);

if($result->num_rows > 0){
    // using fetch_assoc

    // while($row = $result->fetch_assoc()){
    //     echo "<pre>";
    //     print_r($row);
    // }
    // using fetch_all(MYSQLI_NUM(default),MYSQLI_ASSOC,MYSQLI_BOTH)

    // while($row = $result->fetch_all()){
    //     echo "<pre>";
    //     print_r($row);
    // }

    // using fetch_array(MYSQLI_NUM,MYSQLI_ASSOC,MYSQLI_BOTH)

    // while($row = $result->fetch_array()){
    //     echo "<pre>";
    //     print_r($row);
    // }

    // using fetch_row
    // while($row = $result->fetch_row()){
    //     echo "<pre>";
    //     print_r($row);
    // }

    // using fetch_field
    // while($row = $result->fetch_field()){
    //     echo "<pre>";
    //     print_r($row->name);
    // }

    // using fetch_fields
    // $row = $result->fetch_fields();
    // echo "<pre>";
    // print_r($row);

    // using fetch_field_direct(0)
    // $row = $result->fetch_field_direct(4);
    // print_r($row->name);

    // fetch_field_lengths
    // $row = $result->field_count;
    // echo $row;
}