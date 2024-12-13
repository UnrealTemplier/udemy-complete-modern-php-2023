<?php

declare(strict_types=1);

require_once "Account.php";

$myAccount = new Account("John", 20);
$myAccount->deposit(30)->deposit(50);

var_dump($myAccount);