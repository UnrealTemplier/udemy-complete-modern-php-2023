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
        if (count($array) === 0) {
            throw new EmptyArrayException();
        }

        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}