<?php

$array = [
    [
        "name" => "Aaditya Sharma",
        "email" => "aaditya.sharma@example.com"
    ],
    [
        "name" => "Sarah Connor",
        "email" => "sconnor99@gmail.com"
    ],
    [
        "name" => "John Doe Jr.",
        "email" => "john.doe.jr@company.org"
    ],
    [
        "name" => "Elena Rostova",
        "email" => "elena.r@techcorp.io"
    ],
    [
        "name" => "David Miller",
        "email" => "david.miller123@outlook.com"
    ]
];

echo "<table>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Email</th>";
echo "</tr>";
for($i=0; $i<sizeof($array); $i++){
    $name = $array[$i]['name'];
    $email = $array[$i]['email'];
    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$email</td>";
     echo "</tr>";
}
echo "</table>";