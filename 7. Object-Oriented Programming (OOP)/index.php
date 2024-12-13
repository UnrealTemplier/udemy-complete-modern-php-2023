<?php

declare(strict_types=1);

require_once "App/Account.php";
require_once "App/SocialMedia.php";

// instead of using multiple use statements
// for the same namespace
// use App\Account;
// use App\SocialMedia;
// we can use multiple 'use'
use App\{Account, SocialMedia};

$myAccount = new Account("Dean", 100);

var_dump($myAccount);