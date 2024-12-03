<?php

$num = 5.455;

echo "initial number: $num";
echo "<br>";
echo "(int): " . (int)$num;
echo "<br>";
echo "floor: " . floor($num);
echo "<br>";
echo "ceil: " . ceil($num);
echo "<br>";

echo "round: " . round($num);
echo "<br>";
echo "round (precision = 2): " . round($num, 2);
echo "<br>";
echo "<br>";
echo "round (precision = 2, HALF_UP): " . round($num, 2, PHP_ROUND_HALF_UP);
echo "<br>";
echo "round (precision = 2, HALF_DOWN): " . round($num, 2, PHP_ROUND_HALF_DOWN);
echo "<br>";
echo "<br>";
echo "round(1.5) (HALF_EVEN): " . round(1.5, 0, PHP_ROUND_HALF_EVEN);
echo "<br>";
echo "round(2.5) (HALF_EVEN): " . round(2.5, 0, PHP_ROUND_HALF_EVEN);
echo "<br>";
echo "round(1.5) (HALF_ODD): " . round(1.5, 0, PHP_ROUND_HALF_ODD);
echo "<br>";
echo "round(2.5) (HALF_ODD): " . round(2.5, 0, PHP_ROUND_HALF_ODD);