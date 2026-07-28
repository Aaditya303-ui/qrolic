<?php
$host = "localhost";
$username = "root";
$pass = "";
$dbname = "practice";
$port = 3307;

try {
    // connect
    $conn = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $username, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // create database
    // $sql = "CREATE DATABASE mydb";
    // $conn->exec($sql);

    // Insert Db
    // $sql = "INSERT INTO MyGuests(firstname,lastname,email) VALUES ('Alex', 'Hales', 'alex@example.com')";
    // $conn->exec($sql);
    // echo "New record created successfully";

    // Last Id:
    // $lastId = $conn->lastInsertId();

    // multiple insertion
    // $sql = "
    //    INSERT INTO MyGuests (firstname, lastname, email) VALUES
    //    ('Adil', 'Rashid', 'adil@example.com'),
    //    ('jofra', 'archer', 'jofra@example.com'),
    //    ('liam', 'plunkett', 'liam@example.com')
    // ";

    // $conn -> exec($sql);

    // prepared statement (by using it with ? and without bind params)

    // $sql = "INSERT INTO MyGuests (firstname,lastname,email) VALUES (?,?,?)";
    // $stmt = $conn->prepare($sql);
    // $stmt->execute(['shreyas','iyer','shreyas@gmail.com']);

    // prepared statement (by using it with :name and with bind params)

    // $sql = "INSERT INTO MyGuests (firstname,lastname,email) VALUES (:firstname,:lastname,:email)";
    // $stmt = $conn->prepare($sql);
    // $stmt -> bindParam(":firstname",$firstname,PDO::PARAM_STR);
    // $stmt -> bindParam(":lastname",$lastname,PDO::PARAM_STR);
    // $stmt -> bindParam(":email",$email,PDO::PARAM_STR);

    // $firstname = "Kl";
    // $lastname = "Rahul";
    // $email = "kl@gmail.com";
    // $stmt -> execute();

    // Select
    $sql = "SELECT * FROM MyGuests";
    $result = $conn->query($sql);

    

    // if($result->rowCount() > 0){
    //     echo "<table><tr><th>ID</th><th>Firstname</th><th>Lastname</th></tr>";
    // while($row = $result->fetch()) {
    //   echo "<tr>";
    //   echo "<td>" . $row['id'] . "</td>";
    //   echo "<td>" . $row['firstname'] . "</td>";
    //   echo "<td>" . $row['lastname'] . "</td>";
    //   echo "</tr>";
    // }
    // echo "</table>";
    // }
    if($sql == true){

        // PDO::FETCH_ASSOC
        // $result1 = $result->fetchAll(PDO::FETCH_ASSOC); 

        // fetch: returns single record
        // $result1 = $result->fetch(PDO::FETCH_ASSOC); 

        //PDO::FETCH_BOTH
        $result1 = $result->fetchAll(PDO::FETCH_BOTH);

        //PDO::FETCH_NUM
        // $result1 = $result->fetchAll(PDO::FETCH_NUM);

        // fetchColumn() returns that specific column data
        // $result1 = $result->fetchColumn(3);

        // FETCH_OBJ: returns in form of object
        // $result1 = $result->fetch(PDO::FETCH_OBJ);

        // getColumnMeta(1): returns specific column name based on index
        // $result1 = $result->getColumnMeta(1);

        // FETCH_OBJ: returns in form of object
        // $result1 = $result->fetchAll(PDO::FETCH_OBJ);

        // getIterator
        // $result1 = $result->getAttribute();

        // get rows count
        // $result1 = $result->fetchAll(PDO::FETCH_ASSOC);
        // $count = count($result1);

        }
    //     echo "<pre>";
    //    print_r($count);

    // echo "<pre>";
    // print_r($result1);

    // echo "<pre>";
    // print_r($result1->firstname);
    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
