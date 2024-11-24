<?php

// 'int|float' is a union type; also 'mixed' type possible for any data type
// '?string' return type means 'string or null' - nullable type
function getStatus(int|float $paymentStatus, bool $showMessage = true) : ?string
{
    $message = match ($paymentStatus) {
        1 => "Success",
        2 => "Denied",
        default => "Unknown"
    };
    
    if ($showMessage) {
        echo $message;
        return null;
    }

    return $message;
}

$statusMessage = getStatus(1); // returns null
// $statusMessage = getStatus(1, false); // returns string
echo $statusMessage; // null won't be displayed
echo "<br>";
var_dump($statusMessage); // var_dump() will show us the null
