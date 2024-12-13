<?php

declare(strict_types=1);

namespace App;

use ReturnTypeWillChange;

class Account 
{
    public const INTEREST_RATE = 2;
    public static int $count = 0;

    public SocialMedia $socialMedia;

    public function __construct(
        private string $name, 
        private float $balance)
    {
        $socialMedia = new SocialMedia();
        self::$count++;
    }

    public function getBalance() {
        return "$" . $this->balance;
    }

    public function setBalance($newBalance) {
        if ($newBalance < 0)
            return;

        $this->balance = $newBalance;
        $this->sendEmail();
    }

    private function sendEmail() {

    }

    public function deposit(float $value)
    {
        $this->balance += $value;

        return $this;
    }
}