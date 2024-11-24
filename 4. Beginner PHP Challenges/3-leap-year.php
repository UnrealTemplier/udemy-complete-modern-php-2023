<?php

declare(strict_types=1);

function isLeapYear(int|float $year): bool
{
    if ($year % 4 !== 0) {
        return false;
    }

    if ($year % 100 === 0 && $year % 400 !== 0) {
        return false;
    }

    return true;
}

var_dump(isLeapYear(1997));     // must return false
var_dump(isLeapYear(1996));     // must return true
var_dump(isLeapYear(1900));     // must return false
var_dump(isLeapYear(2000));     // must return true