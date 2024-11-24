<?php

$names = ["John", "Jane", "Bob"];

foreach ($names as $name) {
    echo $name . "<br>";
}

echo "<br>";

foreach ($names as $key => $name) {
    echo $key . " => " . $name . "<br>";
}

echo "<br>";

$capitals = [
    "Russia" => "Moscow",
    "Italy" => "Rome",
    "Iran" => "Tehran"
];

foreach ($capitals as $country => $capital) {
    echo $country . " => " . $capital . "<br>";
}