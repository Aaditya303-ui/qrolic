<?php

// q1 

// $products = [
//     "iphone",
//     "samsung",
//     "macbook"
// ];

// $q = $_GET['q'];
// $result =  "";

// if($q !== ""){
//     $len = strlen($q);
//     $q = strtolower($q);
//     foreach($products as $p){
//         if(stristr($q,substr($p,0,$len))){
//             if($result === ""){
//                 $result = $p;
//             }else{
//                 $result .= ", $p";
//             }
//         }
//     }
// }
// echo $result === "" ? "No suggestion": $result;


// q2

// $students = [
//    1 => "Aaditya",
//    2 => "Rahul",
//    3 => "Jay"
// ];

// $q = $_GET['q'];

// if($q !== ""){
//     $q = strtolower($q);
//     $len = strlen($q);
//     $hint = "";

//     foreach($students as $id => $names){
//         if($id == $q){
//             if($hint === ""){
//                 $hint = $names;
//             }else{
//                 $hint .= ", " .$names;
//             }
//         }
//     }
// }
// echo ($hint === "") ? "No student found" : $hint;

// q3 

// $laptops = [
//    "hp" => 50000,
//    "dell" => 60000,
//    "lenovo" => 55000
// ];

// $q = $_GET['q'];
// $hint = "";

// if($q !== ""){
//     foreach($laptops as $laptop => $price){
//         if($laptop == $q){
//             if($q == ""){
//                 $hint = $price;
//             }else{
//                 $hint .= " $price ";
//             }
//         }
//     }
// }
// echo ($hint === "") ? "No product available": $hint;

// q4

// $valid_user = "admin";
// $valid_pass = 1234;

// $user = $_POST['u'];
// $pass = $_POST['p'];

// if($user == $valid_user && $pass == $valid_pass){
//     echo "Login success Welcome $user";
// }else{
//     echo "Login failed";
// }

// q5

// $email = $_POST['e'];
// $validemail = "aj@gmail.com";
// if($email == $validemail){
//     echo "Valid User...";
// }elseif($email == ""){
//     echo "email cant be empty";
// }else{
//     echo "Invalid email";
// }

// q6

// $json = file_get_contents('php://input');
// $data = json_decode($json,true);

// $name = $data['name'];
// $email = $data['email'];
// $msg = $data['msg'];

// if(empty($name) || empty($email) || empty($msg)){
//     $response = ["status"=>"error","Message"=>"All fields are required"];
// }else{
//     $response = ["status"=>"success","Message"=>"congratulation $name your details are recieved"];
// }

// header('Content-Type: application/json');
// echo json_encode($response);

// q7

// $employees = [
//  [
//    'id'=>'EMP001',
//    'name'=>'Aaditya'
//  ],
//  [
//    'id'=>'EMP002',
//    'name'=>'Jay'
//  ]
// ];

// $id = $_GET['id'];
// $hint = "";

// if($id !== ""){
//     for($i=0; $i<sizeof($employees); $i++){
//         $eid = $employees[$i]['id'];
//         $ename = $employees[$i]['name'];

//         if($eid == $id){
//             if($id == ""){
//                 $hint = $ename;
//             }else{
//                 $hint .= " $ename";
//             }
//         }
//     }
// }

// echo ($hint === "") ? "No product available": $hint;

// q7

// $products = [
//  ['name'=>'iPhone','category'=>'mobile'],
//  ['name'=>'HP','category'=>'laptop']
// ];

// $p = $_GET['p'];
// $hint = "";

// if($p !== ""){
//     for($i=0; $i<sizeof($products); $i++){
//         $pname = $products[$i]['name'];
//         $pcat = $products[$i]['category'];

//         if($pcat == $p){
//             if($pcat == ""){
//                 $hint = $pname;
//             }else{
//                 $hint .= " $pname ";
//             }
//         }
//     }
// }

// echo ($p == "") ? "Cant be empty" : $hint;

// q8

// $u = $_GET['u'];
// $hint = "";

// $users = [
//    "aaditya",
//    "rahul",
//    "jay"
// ];

// if($u !== ""){
//     for($i=0; $i<sizeof($users); $i++){
//         if($u == $users[$i]){
//             if($u == ""){
//                 echo "Enter something";
//             }
//             echo "Username is taken";
//             break;
//         }else{
//             echo "Username is available";
//             break;
//         }
//     }
// }

// echo ($u == "") ? "It cant be empty": $hint;

// database 

// $q = $_REQUEST['q'];

// $conn = mysqli_connect('localhost','root','','practice',3307);
// $sql="SELECT * FROM student WHERE id = '".$q."'";
// $result = mysqli_query($conn,$sql);

// echo "<table>
// <tr>
// <th>Roll No</th>
// <th>First Name</th>
// <th>marks</th>
// <th>grade</th>
// <th>city</th>
// </tr>";

// while(($row = mysqli_fetch_assoc($result))){
//     echo "<tr>";
//     echo "<td>".$row['rollno']."</td>";
//     echo "<td>".$row['name']."</td>";
//     echo "<td>".$row['marks']."</td>";
//     echo "<td>".$row['grade']."</td>";
//     echo "<td>".$row['city']."</td>";
// }

// if($_SERVER['REQUEST_METHOD'] == "POST"){
//     $inputUsername = $_POST['username'];
//     $inputPassword = $_POST['password'];

//     $cuser = "admin";
//     $cpass = 123;

//     if($inputUsername == $cuser && $inputPassword == $cpass){
//         echo "Login Successful";
//     }else{
//         echo "Invalid Credentials";
//     }
// }

header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];

    $productArray = [
        'product_name' => $productName,
        'product_price' => $productPrice
    ];

    $response = [
        "message" => "Product Added"
    ];

    echo json_encode($response);
    exit;
}