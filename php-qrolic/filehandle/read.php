<?php

// Reading the entire file 

// $file = fopen("content.csv","r");
// $content = fread($file,filesize("content.csv"));

// echo "<pre>";
// echo $content;

// 2. Reading a File Line by Line

// $file = fopen("content.csv",'r');

// if($file){
//     while(($line = fgetc($file)) !== false){
//         echo $line . "<br>";
//     }
//     fclose($file);
// }

// 3. Writing to Files

// $file = fopen("aj.txt",'w');

// if($file){
//     $text = "Hello World \n";
//     fwrite($file,$text);
//     fclose($file);
// }

// Deleting Files

// if(file_exists("aj.txt")){
//     unlink("aj.txt");
//     echo "File deleted successfully !";
// }else{
//     echo "File doesnt exist";
// }

// read file

// echo readfile("webdictionary.txt");

// $myfile = fopen("newFile.txt",'a');
// $txt = "Donald duck \n";
// fwrite($myfile,$txt);
// $txt = "Mickey Mouse \n";
// fwrite($myfile,$txt);


// $check = fopen("singleline.txt", "r");

// $seq = fgets($check);


// while(! feof($check))
// {
//   echo $seq ;
//   $seq = fgets($check);
// }

// fclose($check);