<?php

declare(strict_types=1);

namespace App;

class Utility
{
    public static function printArr($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}