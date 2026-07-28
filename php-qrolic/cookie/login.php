<!DOCTYPE html>
<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $cartItem = 0;

    $cartItem++;
    setcookie("name",$name,time()+60*60);

    echo "Login successful <a href='dashboard.php'>Go to next page</a>";
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        Name: <input type="text" name="name">
        <input type="submit" name="submit">
    </form>
</body>
</html>