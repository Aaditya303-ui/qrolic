<?php

function demo($n){
    echo "Before we enter in try block <br>";
    try{
        echo "\nInside the block";

        if($n == 0)
        {
            throw new Exception('Number is zero');

            echo "\n After throw(It will be executed)";
        }
    }catch(Exception $e){
        echo "\n Exception Caught", $e->getMessage();
    }
    finally {
        echo "\n Here cleanup activity will be done";
    }
    echo "\n After catch(will be executed)";
}

demo(0);