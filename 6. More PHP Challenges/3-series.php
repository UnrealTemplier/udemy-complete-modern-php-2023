<?php

declare(strict_types=1);

function slices(string $series, int $size): array {
    echo "string = " . $series . ", size = " . $size . "<br>";

    $seriesLength = strlen($series);

    if ($size < 1 || $size > $seriesLength) {
        return [];
    }

    $slices = [];
    for ($i = 0; $i <= ($seriesLength - $size); $i++) {
        $slices[] = substr($series, $i, $size);
    }

    return $slices;
}

$series = "123456789";
$slices2 = slices($series, 3);

echo "<pre>";
print_r($slices2);
echo "<pre>";