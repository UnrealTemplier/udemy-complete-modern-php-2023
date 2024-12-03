<?php

function sum(bool $dumpArray, int|float ...$nums) {
    if ($dumpArray) {
        var_dump($nums);
        echo "<br>";
    }

    return array_sum($nums);
}

echo sum(false, 5, 7, 2);