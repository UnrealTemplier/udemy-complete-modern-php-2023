<?php

$log1 = function($data) {
    echo "log1: " . $data . "<br>";
};

$log2 = function($data) {
    echo "log2: " . $data . "<br>";
};

function sum($a, $b, $callback = null) {
    $sum = $a + $b;
    if ($callback) {
        $callback($sum);
    }
    return $sum;
}

sum(5, 2);
sum(5, 2, $log1);
sum(5, 2, $log2);