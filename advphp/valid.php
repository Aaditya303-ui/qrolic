<?php 

$email = $_GET['email'];
$password = $_GET['password'];

if($email == "abc@gmail.com" && $password = 12345){
    echo "Welcome User";
}else{
    echo "Invalid user";
}