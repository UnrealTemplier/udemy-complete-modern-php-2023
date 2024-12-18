<?php

declare(strict_types=1);

namespace App;

class CurrentWeek implements \Iterator
{
    private \DateTime $date;
    private int $daysFrom = 0;

    public function __construct()
    {
        $this->date = new \DateTime();
    }

    public function current(): mixed
    {
        return $this->date->format("F j Y");
    }

    public function next(): void
    {
        $this->date->modify("tomorrow");
        $this->daysFrom++;
    }

    public function key(): mixed
    {
        return $this->daysFrom;
    }

    public function valid(): bool
    {
        return $this->daysFrom < 7;
    }

    public function rewind(): void
    {
        $this->date->modify("today");
        $this->daysFrom = 0;
    }
}