<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice";
$port = 3307;

try{
    $conn = new pdo("mysql:host=$servername;dbname=$dbname;port=$port", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("Could not connect. " . $e->getMessage());
}

// try{
//     $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute(["Aaditya","Jadeja","aj@gmail.com"]);
// }catch(PDOException $e){
//     echo $e->getMessage();
// }

try{
    $sql = "INSERT INTO MyGuests(firstname,lastname,email) VALUES (:firstname,:lastname,:email)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':firstname',$firstname,PDO::PARAM_STR);
    $stmt->bindParam(':lastname',$lastname,PDO::PARAM_STR);
    $stmt->bindParam(":email",$email,PDO::PARAM_STR);

    $firstname = "John";
    $lastname = "Doe";
    $email = "john@example.com";
    $stmt->execute();
}catch(PDOException $e){
    echo $e->getMessage();
}