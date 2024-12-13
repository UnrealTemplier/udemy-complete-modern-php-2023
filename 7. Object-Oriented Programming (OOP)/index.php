<?php

declare(strict_types=1);

require_once "Account.php";

$myAccount = null;

// The old way
// if (isset($myAccount)) {
//     $myAccount->deposit(30)->deposit(50);
// }

// The new way
// Null-safe operator
$myAccount?->deposit(30)->deposit(50);

var_dump($myAccount);