<?php
$dataArray = [
    ["name" => "Alicia Abernathy", "age" =>25],
    ["name" => "John Doe", "age" => 30],
    ["name" => "Jane Smith", "age" => 28],
    ["name" => "Bob Johnson", "age" => 35],
    ["name" => "Emily Chen", "age" => 22],
    ["name" => "Michael Brown", "age" => 40],
    ["name" => "Sarah Lee", "age" => 32],
    ["name" => "Kevin White", "age" => 29],
    ["name" => "Lisa Nguyen", "age" => 26],
    ["name" => "David Kim", "age" => 38],
    ["name" => "Helen Davis", "age" => 24],
    ["name" => "Peter Harris", "age" => 36],
    ["name" => "Rachel Martin", "age" => 31],
    ["name" => "Christopher Hall", "age" => 27],
    ["name" => "Jessica Thompson", "age" => 34]
];

$jsonData = json_encode($dataArray, JSON_PRETTY_PRINT);
header('Content-Type: application/json');
echo $jsonData;
?>
