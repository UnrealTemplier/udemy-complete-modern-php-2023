<?php

declare(strict_types=1);

class DNA
{
    public static function nucleotideCount1(string $seq)
    {
        $arr = [];

        foreach (str_split($seq) as $char) {
            if (!array_key_exists($char, $arr)) {
                $arr[$char] = 1;
            } else {
                $arr[$char]++;
            }
        }

        echo "\"{$seq}\" -> 'A': " . $arr['A'] . ", 'C': " . $arr['C'] . ", 'G': " . $arr['G'] . ", 'T': " . $arr['T'];
    }

    public static function nucleotideCount2(string $seq): array
    {
        return [
            'A' => substr_count($seq, 'A'),
            'G' => substr_count($seq, 'G'),
            'C' => substr_count($seq, 'C'),
            'T' => substr_count($seq, 'T')
        ];
    }
}

$seq = "GATTACA";

DNA::nucleotideCount1($seq);

echo "<br>";

$arr2 = DNA::nucleotideCount2($seq);
echo "\"{$seq}\" -> 'A': " . $arr2['A'] . ", 'C': " . $arr2['C'] . ", 'G': " . $arr2['G'] . ", 'T': " . $arr2['T'];
