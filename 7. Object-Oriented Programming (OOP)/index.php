<?php

declare(strict_types=1);

spl_autoload_register(function($class) {
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";
    require_once $path;
});

use App\{Account, SocialMedia};

$myAccount = new Account("Dean", 100);
var_dump($myAccount::$count);

$myAccount2 = new Account("Dean", 100);
var_dump(Account::$count);