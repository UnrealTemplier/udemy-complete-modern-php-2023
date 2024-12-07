<?php

$cup = "empty";

function fillCup($passedCup) {
    $passedCup = "filled";
}

function fillCupByReference(&$passedCup) {
    $passedCup = "filled";
}

echo "Before: " . $cup . "<br>";
fillCup($cup);
echo "After: " . $cup . "<br>";

echo "<br>Now we're passing by reference<br><br>";

echo "Before: " . $cup . "<br>";
fillCupByReference($cup);
echo "After: " . $cup . "<br>";