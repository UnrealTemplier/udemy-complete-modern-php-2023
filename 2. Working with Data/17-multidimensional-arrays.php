<?php

$food = [
    'John' => ['Salad', 'Spaghetti'], 
    'Jane' => 'Burger', 
    'Sam' => 'Pizza'
];

$food['Jane'] = 'Chicken';
$food['Bob'] = 'Tomato Soup';

var_dump($food['John'][1]);