<?php

$users = ['John', 'Jane', 'Bob', null];

// array_key_exists includes null values as correct
if (array_key_exists(3, $users)) {
    echo "User found!";
}

// if array_filter called without callback then it will filter all null values out
$users = array_filter($users);
echo "<pre>";
print_r($users);
echo "<pre>";

// call array_filter with callback
// filter out specific value without reindexing
$users = array_filter($users, fn($user) => $user !== "Jane");
echo "<pre>";
print_r($users);
echo "<pre>";

// call array_values to return all array values with reindexing
$users = array_values($users);
echo "<pre>";
print_r($users);
echo "<pre>";

// add a new value to the array
$users[] = "Will";

// call array_map to modify each value in the array
$users = array_map(fn($user) => strtoupper($user), $users);
echo "<pre>";
print_r($users);
echo "<pre>";

// call array_merge to combine several arrays into one
$users = array_merge($users, ['Sam', 'Jessica']);
echo "<pre>";
print_r($users);
echo "<pre>";

// backup the state of the array
$users_copy = $users;

// call plain sort with default flags to sort an array with reindexing
sort($users);
echo "<pre>";
print_r($users);
echo "<pre>";

// restore old state of the array
$users = $users_copy;
// call asort with default flags to sort an array keeping original indeces
asort($users);
echo "<pre>";
print_r($users);
echo "<pre>";