<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $iemail = $_POST['email'];
    $ipass = $_POST['password'];

    $cemail = "admin@gmail.com";
    $cpass = 123;

    if($iemail == $cemail && $ipass == $cpass){
        echo "Valid users";
    }else{
        echo "Incorrect username or password";
    }
}