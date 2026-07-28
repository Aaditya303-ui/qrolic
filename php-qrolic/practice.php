<?php

// $i = 1;

// do{
//     echo "$i <br>";
//     $i++;
// }while($i > 10);

// $i = 1;

// while($i > 10){
//     echo "$i <br>";
//     $i++;
// }

// date_default_timezone_set("Asia/kolkata");
// $d = new DateTime();
// echo date("y-M-d H:i:s D");
?>

<?php 
// if($_SERVER['REQUEST_METHOD'] == "POST"){
//     $name = $_POST['name'];
//     echo $name;
// }
?>

<!-- <form action="practice.php" method="post">
    Name: <input type="text" name="name">
    <input type="submit">
</form> -->


<?php 
// $arr = [
//     [
//         "name"=> "Aaditya",
//         "age"=> 23
//     ],
//     [
//         "name" => "abc",
//         "age" => 12
//     ]
// ];

// foreach($arr as $k => $v){
//     $name = $arr[$k]['name'];
//     $age = $arr[$k]['age'];

//     echo "$name => $age <br>";
// }

// $oldfile = fopen('text.txt','r');
// $newfile = fopen('context.txt','w');

// try{
//     if($oldfile){
//         while(($line = fgets($oldfile)) !== false){
//         echo $line;
//         fwrite($newfile,$line);
//     }
//     }
// }catch(Exception $e){
//     echo $e->getMessage();
// }

// setcookie("Name","aaditya",time()+60*60,'/');

// $name = $_COOKIE['Name'];

// if(isset($_COOKIE['Name'])){
//     echo "$name welcome to webpage";
// }else{
//     echo "No value is there";
// }


// $i = -1;

// try{
//     if($i < 0){
//         throw new Exception("num cant be negative");
//     }
//     echo "num is right <br>";
// }catch(Exception $e){
//     echo $e->getMessage();
// }finally{
//     echo "the code is done <br>";
// }

// $oldc = fopen('head.txt','r');
// $newc = fopen('work.txt','w');

// while(($line = fgets($oldc)) !== false){
//     fwrite($newc,$line);
// }

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="fb"></div>
    <button onclick="seeMagic()">click me</button>
</body>
<script>
    function seeMagic(){
        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById('fb').innerHTML = this.responseText;
            }
        }
        xhr.open('GET','mi.php',true);
        xhr.send();
    }
</script>
</html> -->

<?php 

// $file = fopen('text.txt','r');
// $newFile = fopen('sample.txt','w');

// while(($line = fgetc($file)) !== false){
//     fputs($newFile,$line);
// }

// $file = fopen("context.txt",'r');
// fseek($file,4,SEEK_SET);
// echo fgetc($file);

// $file = fopen("context.txt",'r');
// fseek($file,-5,SEEK_END);
// echo fgetc($file);

$host = "localhost";
$user = "root";
$pass = "";
$port = 3307;
$db = "practice";
?>
