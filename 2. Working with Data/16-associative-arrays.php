<?php

$food = [
    'John' => 'Salad', 
    'Jane' => 'Burger', 
    'Sam' => 'Pizza'
];

$food['Jane'] = 'Chicken';
$food['Bob'] = 'Tomato Soup';

var_dump($food);