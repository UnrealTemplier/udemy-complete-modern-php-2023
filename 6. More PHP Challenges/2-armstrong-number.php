<?php

declare(strict_types=1);

function isArmstrongNumber(int $number): bool {
    $digits = str_split((string)$number);

    $digitsCount = count($digits);
    $digits = array_map(
        fn($digit) => (int)$digit ** $digitsCount,
        $digits
    );
    
    return array_sum($digits) === $number;
}

echo "9: " . (int)isArmstrongNumber(9) . "<br>";
echo "10: " . (int)isArmstrongNumber(10) . "<br>";
echo "153: " . (int)isArmstrongNumber(153) . "<br>";
echo "154: " . (int)isArmstrongNumber(154) . "<br>";