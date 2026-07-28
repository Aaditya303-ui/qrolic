<?php

// Question 1: Student Registration

// if($_POST['submit']){
//     $name = $_POST['name'];
//     $email = $_POST['email'];
// }
?>
<!-- <form action="forms.php" method="post">
    Name: <input type="text" name="name">
    <br>
    Email: <input type="text" name="email">
    <br>
    <input type="submit" name="submit">
</form> -->
<?php 
// echo "Hello $name <br>";
// echo "Your Email is $email <br>";
?>

<?php 
// Question 2: User Login

// if($_POST['submit']){
//     $name = $_POST['username'];
//     $password = $_POST['password'];

//     $setP = "admin123";

//     if($password == $setP){
//         echo "Login Successful";
//     }else{
//         echo "Invalid Credentials";
//     }
// }
?>

<!-- <form action="forms.php" method="post">
    Name: <input type="text" name="username"><br>
    password: <input type="password" name="password"><br>
    <input type="submit" name="submit">
</form> -->

<?php
// Question 3: Simple calculator

// if($_SERVER["REQUEST_METHOD"] === "POST"){
//     $n1 = $_POST['num1'];
//     $n2 = $_POST['num2'];
//     $result = "";

//     if($_POST['add']){
//         $result = $n1 + $n2;
//     }elseif($_POST['subtract']){
//         $result = $n1 - $n2;
//     }elseif($_POST['multiply']){
//         $result = $n1 * $n2;
//     }elseif($_POST['divide']){
//         if($n2 == 0){
//             $result = "Cant use 0 in divide";
//         }
//         $result = $n1/$n2;
//     }
// }
?>

<!-- <form action="forms.php" method="post">
    Enter the num 1: <input type="text" name="num1" value=""><br>
    Enter the num 2: <input type="text" name="num2" value=""><br>
    <input type="submit" name="add" value="add">
    <input type="submit" name="subtract" value="subtract">
    <input type="submit" name="multiply" value="multiply">
    <input type="submit" name="divide" value="divide">
</form> -->

<?php
// echo "$result ";
?>

<?php // Question 4: Name Validation ?>

<?php
// if($_POST['submit']){
//     $name = $_POST['name'];

//     if($name == ""){
//         echo "Enter the name";
//     }
// }
?>

<!-- <form action="forms.php" method="post">
    Name: <input type="text" name="name"><br>
    <input type="submit" name="submit">
</form> -->

<?php // Question 5: Email Validation ?>

<?php 
// if($_POST['submit']){
//     $email = $_POST['email'];

//     if(!str_contains($email,"@")){
//         echo "Must contain @";
//     }else{
//         echo "Its Valid";
//     }
// }
?>

<!-- <form action="forms.php" method="post">
    Email: <input type="text" name="email"><br>
    <input type="submit" name="submit">
</form> -->

<?php // Question 6: Age Validation  ?>

<?php 
// $age = $_POST['age'];

// if($age <= 18){
//     echo "Yes he is eligible";
// }else{
//     echo "He isnt eligible";
// }
?>
<!-- <form action="forms.php" method="post">
    Age: <input type="text" name="age"><br>
    <input type="submit" name="submit">
</form> -->

<?php // Question 10: Student Result  ?>

<!-- <form action="forms.php" method="post">
    Age: <input type="text" name="age"><br>
    <input type="submit" name="submit">
</form> -->

<?php // Question 11: Student Result  ?>

<!-- <form action="result.php" method="get">
    Name: <input type="text" name="name">
    marks: <input type="text" name="marks">
    <input type="submit" value="check result">
</form> -->

<?php // Question 12: Product Search  ?>

<!-- <form action="card.php" action='get'>
    Name: <input type="text" name="name">
    <input type="submit" value="search">
</form> -->

<?php // Question 12: Leave Application Form ?>

<?php
 
// $name = $from_date = $to_date = $message = "";

// $nameErr = $fromErr = $toErr = $messageErr = '';


//     if($_SERVER["REQUEST_METHOD"] == "POST"){
//         $name = $_POST['emp_name'];
//         $from_date = $_POST['from_date'];
//         $to_date = $_POST['to_date'];
//         $message = $_POST['message'];

//         if(empty($name) && empty($from_date) && empty($to_date) && empty($message)){
//             $nameErr = "* Name of the employee is required";
//             $fromErr = "* Date from holiday is taken is required";
//             $toErr = "* Date till holiday would be taken is required";
//             $messageErr = "* Message and reason is required";
//         }else{
//             echo "<h1>The people who took holiday</h1> <br>";
//             echo "Name of the employee: $name <br>";
//             echo "From date: $from_date <br>";
//             echo "To date: $to_date <br>";
//             echo "Message is: $message <br>";
//         }
//     }

?>

<!-- <form action="forms.php" method="post">
    Name: <input type="text" name="emp_name" > <br>
    <?php // echo "<span style='color: red'>$nameErr<span>" ?> <br>
    From Date: <input type="date" name="from_date"> <br>
    To Date: <input type="date" name="to_date"><br>
    <?php // echo "<span style='color: red'>$toErr<span>" ?> <br>
    Reason: <textarea name="message" rows="5" cols="40"></textarea><br>
    <?php // echo "<span style='color: red'>$messageErr<span>" ?> <br>
    <input type="submit" value="submit" name="submit">
</form> -->

<?php // Question 15: Final Boss (Mini Registration System) ?>
<?php 
// $name = $email = $age = $password = "";
// $nameErr = $emailErr = $ageErr = $passwordErr = "";

    // if($_SERVER["REQUEST_METHOD"] == "POST"){
    //     $name = $_POST['name'] ?? '';
    //     $email = $_POST['email'] ?? '';
    //     $age = $_POST['age'] ?? '';
    //     $password = $_POST['password'] ?? '';
    //     $rightpwd = "admin123";

    //     if(empty($name) && empty($email) && empty($age) && empty($password)){
    //         $nameErr = "* Name is required";
    //         $emailErr = "* Email is required";
    //         $ageErr = "* Age is required";
    //         $passwordErr = "* Password is required";

    //         if($age >= 18){
    //             $ageErr = "Age should be greater then 18";
    //         }

    //         if($password == $rightpwd){
    //             $passwordErr = "* Password is incorrect";
    //         }
    //     }else{
    //         echo "<h1>The registration form of employee</h1> <br>";
    //         echo "Name of the employee is: $name <br>";
    //         echo "Email of the employee is: $email <br>";
    //         echo "age of the employee is: $age <br>";
    //     }
    // }
?>
<!-- <form action="forms.php" method='post'>
    Name: <input type="text" name="name"> <br>
    <?php // echo "<span style='color: red'>$nameErr</span> <br>"; ?>
    Email: <input type="text" name="email"> <br>
    <?php // echo "<span style='color: red'>$emailErr</span> <br>"; ?>
    age: <input type="number" name="age"> <br>
    <?php // echo "<span style='color: red'>$ageErr</span> <br>"; ?>
    password: <input type="password" name="password"> <br>
    <?php // echo "<span style='color: red'>$passwordErr</span> <br>"; ?>

    <input type="submit" name="submit">
</form> -->