<?php

$cricketers = ["hardik pandya","krunal pandya","romario shepherd","Tim david","jitesh sharma"
,"Sachin Tendulkar","suryaKumar yadav","virat kohli","Ms dhoni","Ab devilliers","chris gayle","Abhi sharma",
"Pat cummins","Jasprit bumrah","Vaibhav suryavanshi"];

$q = $_GET['q'];
$hint = "";


if($q !== ""){
    $len = strlen($q);
    $q = strtolower($q);
    foreach($cricketers as $cricket){
        if(stristr($q,substr($cricket,0,$len))){
            if($q == ""){
                $hint = $cricket;
            }else{
                $hint .= " $cricket , ";
            }
        }
    }
}
echo ($hint == "")? "No cricketer found": $hint;