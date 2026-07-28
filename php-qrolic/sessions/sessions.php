<?php 
session_start();

// $_SESSION['username'] = "Aaditya";
// $_SESSION['user_id'] = 123;


// echo "Session data stored successfully! <a href='dash.php'>Go to Student Dashboard</a>";
// if(isset($_SESSION['username'])){
//     echo "Welcome: ".$_SESSION['username'];
// }else{
//     echo "Welcome: guest";
// }
?>

<?php 
// Question 3: Login Simulation
?>

<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
    // $name = $_POST['name'];
    // $pass = $_POST['password'];

    // $cpass = 123;

    // if($pass == $cpass){
    //     $_SESSION['name'] = $name;
    //     header('Location: dash.php');
    // }else{
    //     echo "Incorrect username or password";
    // }


}
?>
<!-- <form action="sessions.php" method="post">
    Name: <input type="text" name="name"><br>
    Password: <input type="password" name="password">
    <input type="submit" name="submit">
</form> -->

<?php 
// Question 6: Store Multiple Session Values

// if($_SERVER['REQUEST_METHOD'] == "POST"){
//     $name = $_POST['name'];
//     $role = $_POST['role'];
//     $city = $_POST['city'];

//     $_SESSION['name'] = $name;
//     $_SESSION['role'] = $role;
//     $_SESSION['city'] = $city;

//     header("Location: dash.php");
// }
?>

<!-- <form action="sessions.php" method="post">
    Name: <input type="text" name="name"><br>
    role: <input type="text" name="role"><br>
    City: <input type="text" name="city">
    <input type="submit" name="submit">
</form> -->