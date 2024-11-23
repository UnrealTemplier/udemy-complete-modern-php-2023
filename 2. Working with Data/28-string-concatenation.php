<?php

$firstName = "John";
$lastName = "Smith";
echo "My name is $firstName $lastName (vars 1)";
echo "<br>";

$firstName = "John";
$lastName = "Smith";
echo "My name is " . $firstName . " " . $lastName . " (vars 2)";
echo "<br>";

const FULL_NAME = "John Smith";
$message = "Hello, my name is ";
$message .= FULL_NAME;
$message .= " (const)";
echo $message;