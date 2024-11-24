<?php

$paymentStatus = 1;
// $paymentStatus = 2;
// $paymentStatus = 3;
// $paymentStatus = '1'; // no type juggling allowed with match expressions

$message = match ($paymentStatus) {
    1 => "Success",
    2 => "Denied",
    default => "Unknown"
};

echo $message;