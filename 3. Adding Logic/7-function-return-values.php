<?php

function getStatus($paymentStatus, $showMessage = true) 
{
    $message = match ($paymentStatus) {
        1 => "Success",
        2 => "Denied",
        default => "Unknown"
    };
    
    if ($showMessage) {
        echo $message;
    }

    return $message;
}

$statusMessage = getStatus(3, false);
echo $statusMessage;
