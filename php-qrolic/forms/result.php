<?php

if(isset($_GET['name']) && isset($_GET['marks'])){
    $name = $_GET['name'];
    $marks = $_GET['marks'];
    $status = "";

    if($marks >= 35){
        $status = "<span style='color: green;'>Pass</span>";
    }else{
        $status = "<span style='color: red;'>Fail</span>";
    }
    echo "<h2>Examination Report Card</h2>";
    echo "<strong>Name: </strong>".$name. "</p>";
    echo "<p><strong>Marks:</strong> " . $marks . " / 100</p>";
    echo "<p><strong>Final Status:</strong> " . $status . "</p>";
}
