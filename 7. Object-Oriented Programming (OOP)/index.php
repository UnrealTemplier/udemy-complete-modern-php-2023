<?php

declare(strict_types=1);

require_once "Account.php";

$myAccount = new Account;
$johnsAccount = new Account;

$myAccount->balance = 20;

var_dump($myAccount->balance);
echo "<br>";
var_dump($johnsAccount);