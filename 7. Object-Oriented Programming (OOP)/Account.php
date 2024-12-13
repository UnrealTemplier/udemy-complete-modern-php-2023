<?php

declare(strict_types=1);

namespace App;

class Account 
{
    public function __construct(
        public string $name, 
        public float $balance)
    {
    }

    public function deposit(float $value)
    {
        $this->balance += $value;

        return $this;
    }
}