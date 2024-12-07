<?php

$log = function ($data) {
    echo $data . "<br>";
};

$log(5);
$log("hello");

$globalVar = 2;

// you cannot access global vars from anonymous functions like this
// $log2 = function($data) {
//     echo $globalVar++;
// };

// you can access global vars from anonymous function with the use keyword
// but it will be a copy of global var
// you cannot modify them from within
$log2 = function() use($globalVar) {
    echo $globalVar++ . "<br>";
};
$log2();
$log2();
$log2();