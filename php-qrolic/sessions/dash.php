<?php 
session_start();
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
?>

<h1>Student Dashboard</h1>

<?php 
if(isset($_SESSION['name']) && isset($_SESSION['role']) && isset($_SESSION['city'])){
    echo "Name: ".$_SESSION['name']."<br>";
    echo "Role: ".$_SESSION['role']."<br>";
    echo "City: ".$_SESSION['city']."<br>";
}else{
    echo "Please login in website";
}

?>
<a href="logout.php">logout</a>