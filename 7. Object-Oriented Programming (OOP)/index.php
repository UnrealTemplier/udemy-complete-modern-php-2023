<?php

declare(strict_types=1);

spl_autoload_register(function($class) {
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";
    require_once $path;
});

use App\{Account, SocialMedia};

$myAccount = new Account("Dean", 100);

// one way to get a constant from a class
// through instance
var_dump($myAccount::INTEREST_RATE);

// another way to get a constant from a class
// through the class itself
var_dump(Account::INTEREST_RATE);