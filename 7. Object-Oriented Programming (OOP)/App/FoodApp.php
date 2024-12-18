<?php

namespace App;

class FoodApp
{
    public function __construct(RestaurantInterface $rest)
    {
        $rest->prepareFood();
    }
}