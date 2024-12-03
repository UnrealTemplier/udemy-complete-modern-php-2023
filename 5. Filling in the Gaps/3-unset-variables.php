<?php

$names = ["John", "Jane", "Bob"];

print_r($names); // print array

echo "<br>";
echo "<br>";

unset($names[1]); // remove variable, not updates array keys
$names = array_values($names); // update array keys

print_r($names);