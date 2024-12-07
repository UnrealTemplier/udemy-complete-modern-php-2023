<?php

$sum = fn($a, $b) => $a + $b;

echo $sum(1, 2) . "<br>";
echo $sum(3, 2) . "<br>";
echo $sum(5, 4) . "<br>";

echo "<br>";

// you can access global vars from arrow functions just as is
// but you cannot modify them from within
$globalVar = 1;
$globalFoo = fn() => $globalVar++;
echo $globalFoo() . "<br>";
echo $globalFoo() . "<br>";
echo $globalFoo() . "<br>";