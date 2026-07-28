<?php

$names = ["Anna", "Brittany", "Cinderella", "Diana", "Eva", "Fiona"];


$q = $_POST['q'] ?? "";

$hint = "";

if ($q != "") {
    $q = strtolower($q);

    foreach ($names as $name) {
        if (stripos($name, $q) === 0) {
            if ($hint == "") {
                $hint = $name;
            } else {
                $hint .= ", " . $name;
            }
        }
    }
}

echo $hint === "" ? "No suggestion" : $hint;
?>