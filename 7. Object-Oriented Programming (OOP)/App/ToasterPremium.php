<?php

declare(strict_types=1);

namespace App;

class ToasterPremium extends Toaster
{
    protected int $slots;
    private int $duration;

    public function __construct(int $newDuration)
    {
        parent::__construct();
        $this->slots = 4;
        $this->duration = $newDuration;
    }

    public function toast()
    {
        parent::toast();
        echo " for {$this->duration} minutes";
    }
}