<?php

declare(strict_types=1);

class School
{
    private array $students = [];

    public function add(string $student, int $grade): void
    {
        $this->students[$grade][] = $student;
    }

    public function grade(int $grade): array
    {
        return $this->students[$grade];
    }

    public function studentsByGradeAlphabetically(): array
    {
        ksort($this->students);

        return array_map(function($gradeArray) {
            sort($gradeArray);
            return $gradeArray;
        }, $this->students);
    }
}

function printArr($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$sc = new School();
$sc->add("Xavier", 2);
$sc->add("Zack", 3);
$sc->add("Jack", 1);
$sc->add("Maria", 2);
$sc->add("Alice", 1);
$sc->add("Mills", 3);
$sc->add("William", 1);
$sc->add("John", 2);
$sc->add("Matthew", 3);
$sc->add("Anna", 1);

printArr($sc->grade(1));
printArr($sc->grade(2));
printArr($sc->grade(3));

printArr($sc->studentsByGradeAlphabetically());