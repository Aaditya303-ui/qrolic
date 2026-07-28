<?php

// Question 1: Age Validation
function myError($errno,$errstr)
{
    echo "$errno $errstr";
}

set_error_handler("myError");