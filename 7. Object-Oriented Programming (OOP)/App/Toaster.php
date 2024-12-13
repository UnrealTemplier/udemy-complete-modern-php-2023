<?php

declare(strict_types=1);

namespace App;

class Toaster
{
    public int $slots = 2;

    public function toast()
    {
        echo "{$this->slots} Toasting bread";
    }
}