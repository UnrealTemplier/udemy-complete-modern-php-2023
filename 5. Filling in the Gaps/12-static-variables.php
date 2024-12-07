<?php

function foo() {
    $a = 1;
    return $a++;
}
echo foo() . "<br>";
echo foo() . "<br>";
echo foo() . "<br>";

echo "<br>";

function staticFoo() {
    static $b = 1;
    return $b++;
}
echo staticFoo() . "<br>";
echo staticFoo() . "<br>";
echo staticFoo() . "<br>";