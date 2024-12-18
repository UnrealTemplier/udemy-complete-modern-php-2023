<?php

declare(strict_types=1);

spl_autoload_register(function($class) {
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";
    require_once $path;
});

use App\{Account, CurrentWeek, EmptyArrayException, FoodApp, RestaurantInterface, RestaurantOne, RestaurantTwo, 
    SocialMedia, Utility, ToasterPremium};

function outputIterable(iterable $iterable)
{
    foreach ($iterable as $key => $value) {
        var_dump($key, $value);
        echo "<br>";
    }
}

$currentWeek = new CurrentWeek();
outputIterable($currentWeek);
