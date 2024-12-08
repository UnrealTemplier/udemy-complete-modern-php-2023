<?php

$nums = [4, 2, 7, 12];

list($a, $b) = $nums;
echo $a . "<br>" . $b;

echo "<br><br>";

$letters = ['A', 'b', 'C'];
[$c, $d] = $letters;
echo $c . "<br>" . $d;

echo "<br><br>";

$keyValues = ['first' => 1, 'second' => 2, 'third' => 3];
['first' => $e, 'third' => $f] = $keyValues;
echo $e . "<br>" . $f;
