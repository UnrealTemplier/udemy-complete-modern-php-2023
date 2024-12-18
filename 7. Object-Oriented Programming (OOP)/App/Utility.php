<?php

declare(strict_types=1);

namespace App;

class Utility
{
    /**
     * Neatly outputs an array
     * 
     * Outputs an array with pre tags for preformatted output
     * 
     * @param array $array Array to output
     */
    public static function printArr($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}