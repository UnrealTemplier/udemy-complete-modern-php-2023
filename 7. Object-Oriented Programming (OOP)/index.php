<?php

declare(strict_types=1);

require_once "App/Account.php";

use App\Account;

$myAccount = new Account("Dean", 100);

var_dump($myAccount);