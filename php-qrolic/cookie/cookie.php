<!DOCTYPE html>
<?php 
setcookie("team","rcb",time() + 2 * 24 * 60 * 60);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <?php 
//    setcookie("team", "", time() - 60); 
   ?>
   <?php
   if(isset($_COOKIE['team']))
    {
        echo "Ipl 2026 champions are ".$_COOKIE['team'];
    }else{
        echo "No Cooki got set";
    }
   ?>
</body>
</html>