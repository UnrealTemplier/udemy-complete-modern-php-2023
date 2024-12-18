<?php

namespace App;

abstract class AbstractProduct
{
    public function turnOn()
    {
        echo "Turning on<br>";
    }

    abstract public function setup();
}