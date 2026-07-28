<?php
$cricketers = ["hardik pandya","krunal pandya","romario shepherd","Tim david","jitesh sharma"
,"Sachin Tendulkar","suryaKumar yadav","virat kohli","Ms dhoni","Ab devilliers","chris gayle","Abhi sharma",
"Pat cummins","Jasprit bumrah","Vaibhav suryavanshi"];

$c = $_GET['q'];
$hint = "";

if($c !== ""){
    $c = strtolower($c);
    $len = strlen($c);
    foreach($cricketers as $cric){
        if(stristr($c,substr($cric,0,$len))){
            if($hint == ""){
                $hint = $cric;
            }else{
                echo "<ul>";
                $hint .= " <li>$cric</li> ";
                echo "</ul>";
            }
        }
    }
}

echo ($hint == "") ? "No cricketer of this name there" : $hint;

// foreach($cricketers as $c){
//     echo 
//     "
//     <ul>
//        <li>$c</li>
//     </ul>
//     ";
// }