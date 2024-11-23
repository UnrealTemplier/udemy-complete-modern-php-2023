<?php

$age = 15;
$isAgeAllowed = $age >= 18 && $age <= 65;
var_dump($isAgeAllowed);
echo "<br>";

$permission = "admin";
$isPermissionGranted = 
    $permission === "admin" ||
    $permission === "mod";
var_dump($isPermissionGranted);