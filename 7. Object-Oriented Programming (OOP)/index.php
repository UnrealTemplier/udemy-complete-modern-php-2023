<?php

declare(strict_types=1);

spl_autoload_register(function($class) {
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";
    require_once $path;
});

use App\{Account, EmptyArrayException, FoodApp, RestaurantInterface, RestaurantOne, RestaurantTwo, 
    SocialMedia, Utility, ToasterPremium};

$today = new DateTime();
echo "Today";
Utility::printDateTime($today);

echo "<br>";

$date = new DateTime("12/22/78");
echo "December 22 1978 (timezone UTC)";
Utility::printDateTime($date);

echo "<br>";

$timezone = new DateTimeZone("America/Chicago");
$date = new DateTime("12/22/78", $timezone);
echo "December 22 1978 (timezone America/Chicago)";
Utility::printDateTime($date);

echo "<br>";

$date->setTimezone(new DateTimeZone("Europe/Paris"));
echo "December 22 1978 (timezone changed to Europe/Paris)";
Utility::printDateTime($date);

echo "<br>";

$date->setDate(2023, 6, 15)->setTime(9, 30);
echo "June 15 2023 09:30 (date and time changed manually)";
Utility::printDateTime($date);

echo "<br>";

echo "June 15 2023 09:30 (formatted output)";
Utility::printDateTimeFormat($date, "F j Y H:i");

echo "<br>";

$date = new DateTime("04/10/2022");
echo "American date format: 04/10/2022";
Utility::printDateTimeFormat($date, "F j Y");

echo "<br>";

$date = new DateTime("04.10.2022");
echo "European date format: 04.10.2022";
Utility::printDateTimeFormat($date, "F j Y");
