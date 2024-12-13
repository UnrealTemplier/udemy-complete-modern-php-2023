<?php

declare(strict_types=1);

namespace App;

class Account 
{
    public const INTEREST_RATE = 2;
    public static int $count = 0;

    public SocialMedia $socialMedia;

    public function __construct(
        public string $name, 
        public float $balance)
    {
        $socialMedia = new SocialMedia();
        self::$count++;
    }

    public function deposit(float $value)
    {
        $this->balance += $value;

        return $this;
    }
}