<?php

declare(strict_types=1);

namespace App;

class Toaster
{
    protected int $slots;

    public function __construct()
    {
        $this->slots = 2;
    }

    public function toast()
    {
        echo "Slots: {$this->slots}<br>";
        echo "Toasting bread";
    }
}