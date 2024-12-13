<?php

declare(strict_types=1);

namespace App;

// we can import classes from global namespace 
// with the 'use' keyword
// without specifying the namespace
use DateTime;
$dt = new DateTime();

// or use \ in front of a class name for global namespace
$dt1 = new \DateTime();

// also we can use aliases with the keyword 'as'
use DateTime as DT;
$dt2 = new DT();

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