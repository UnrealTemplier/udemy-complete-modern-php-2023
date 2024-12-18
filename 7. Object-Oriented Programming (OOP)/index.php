<?php

declare(strict_types=1);

spl_autoload_register(function($class) {
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";
    require_once $path;
});

use App\{Account, FoodApp, RestaurantInterface, RestaurantOne, RestaurantTwo, SocialMedia, Utility, ToasterPremium};

$myToaster = new ToasterPremium(3);
$myToaster->toast();

echo "<br><br>";

$rest1 = new FoodApp(new class("BubbaGump") implements RestaurantInterface {
    public function __construct(public string $name) {}
    
    public function prepareFood() {
        echo "[{$this->name}] Prepare food Anonymous";
    }
});
