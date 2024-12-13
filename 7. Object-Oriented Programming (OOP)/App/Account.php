<?php

declare(strict_types=1);

namespace App;

class Account 
{
    public SocialMedia $socialMedia;

    public function __construct(
        public string $name, 
        public float $balance)
    {
        $socialMedia = new SocialMedia();
    }

    public function deposit(float $value)
    {
        $this->balance += $value;

        return $this;
    }
}