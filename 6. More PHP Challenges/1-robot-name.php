<?php

declare(strict_types=1);

function getNewRobotName(): string {
    $letters = range('A', 'Z');
    shuffle($letters);

    $number = mt_rand(100, 999);

    return $letters[0] . $letters[1] . $number;
}

echo getNewRobotName();