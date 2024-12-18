<?php

declare(strict_types=1);

namespace App;

class Toaster extends AbstractProduct
{
    protected int $slots;

    public function __construct()
    {
        $this->slots = 2;
        $this->setup();
        $this->turnOn();
    }

    public function toast()
    {
        echo "Slots: {$this->slots}<br>";
        echo "Toasting bread";
    }

    public function setup()
    {
        echo "Setup<br>";
    }
}