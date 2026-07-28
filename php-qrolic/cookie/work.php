<!DOCTYPE html>
<?php 
setcookie("username","Rahul",time()+1*24*60*60);
setcookie("lastVisit",date("d-m-Y H:i:s"),time()+1*24*60*60);

setcookie("name","aaditya",time()+7*24*60*60);
setcookie("theme","dark",time()+1*24*60*60);
setcookie("language","English",time()+60*60);
setcookie("Visits",5,time()+60*60);

echo "<h1>User Information</h1> <br>";
echo "Username: ".$_COOKIE['name'] . "<br>";
echo "Theme: ".$_COOKIE['theme'] . "<br>";
echo "language: ".$_COOKIE['language'] . "<br>";
echo "language: ".$_COOKIE['Visits'] . "<br>";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // Question 1: 

    // if(isset($_COOKIE['username'])){
    //     echo "Welcome " .$_COOKIE['username'];
    // }else{
    //     echo "Guest user";
    // }

    // Question 2:
    // if(isset($_COOKIE['lastVisit'])){
    //     echo $_COOKIE['lastVisit'];
    // }

    // Question 3: 
    //    if(isset($_COOKIE['theme'])){
    //     echo "dark theme is set";
    //    }else{
    //     echo "No theme right now";
    //    }

    // Question 4: Language Preference
    // if(isset($_COOKIE['language'])){
    //     echo $_COOKIE['language']." language is set";
    // }else{
    //     echo "No theme right now";
    // }
    ?>
</body>
</html>