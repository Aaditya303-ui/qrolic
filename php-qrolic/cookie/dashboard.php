<?php 

if(isset($_COOKIE['name'])){
    $name = $_COOKIE['name'];
    echo "<h1>Welcome " . htmlspecialchars($name) . "</h1>";
}