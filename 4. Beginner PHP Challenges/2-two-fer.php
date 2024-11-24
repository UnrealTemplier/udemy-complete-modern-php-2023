<?php

declare(strict_types=1);

function twoFer(string $name = "you"): string
{
    return "One for $name, one for me.<br>";
}

echo twoFer();
echo twoFer("Bob");
echo twoFer("Michael");
