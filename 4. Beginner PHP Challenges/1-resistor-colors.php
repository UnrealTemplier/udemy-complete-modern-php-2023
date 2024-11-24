<?php

declare(strict_types=1);

/**
 * Returns color code by given color
 */
function getColorCode(string $color): ?int
{
    $colorCodes = [
        "black" => 0,
        "brown" => 1,
        "red" => 2,
        "orange" => 3,
        "yellow" => 4,
        "green" => 5,
        "blue" => 6,
        "violet" => 7,
        "grey" => 8,
        "white" => 9
    ];

    return $colorCodes[$color] ?? null;
}

echo getColorCode("black") . "<br>";     // must be 0
echo getColorCode("white") . "<br>";     // must be 9
echo getColorCode("orange") . "<br>";    // must be 3
echo getColorCode("violet") . "<br>";    // must be 7
echo getColorCode("cherny") . "<br>";    // must be empty string
var_dump(getColorCode("cherny"));        // must be null