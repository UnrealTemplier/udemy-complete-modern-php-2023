<?php

$globalVar = 10;

function foo() {
    $globalVar = 1;

    return $globalVar;
}
echo "Local: " . foo();

echo "<br>";

function globalFoo() {
    global $globalVar;

    return $globalVar;
}
echo "Global: " . globalFoo();