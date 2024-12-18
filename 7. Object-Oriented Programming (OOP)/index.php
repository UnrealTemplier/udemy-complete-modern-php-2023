<?php

declare(strict_types=1);

spl_autoload_register(function($class) {
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";
    require_once $path;
});

use App\{Account, EmptyArrayException, FoodApp, RestaurantInterface, RestaurantOne, RestaurantTwo, SocialMedia, Utility, ToasterPremium};

try {
    Utility::printArr([]);
} catch (InvalidArgumentException|EmptyArrayException $e) {
    echo "Custom exception: {$e->getMessage()} <br>";
} catch (Exception $e) {
    echo "Default exception <br>";
} finally {
    echo "Finally block <br>";
}

echo "Finished running script";
