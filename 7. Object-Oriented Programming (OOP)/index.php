<?php

declare(strict_types=1);

spl_autoload_register(function($class) {
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";
    require_once $path;
});

use App\{Account, SocialMedia, Utility, ToasterPremium};

$myToaster = new ToasterPremium();
$myToaster->toast();
