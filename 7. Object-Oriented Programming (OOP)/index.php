<?php

declare(strict_types=1);

spl_autoload_register(function($class) {
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";
    require_once $path;
});

use App\{Account, SocialMedia, Utility};

$myAccount = new Account("Dean", 100);

$myAccount->setBalance(120);
echo $myAccount->getBalance();
