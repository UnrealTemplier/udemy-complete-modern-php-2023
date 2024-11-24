<?php

for ($i = 1; $i <= 15; $i++) {
    if ($i === 6) {
        continue;
    }

    if ($i === 14) {
        break;
    }

    echo $i . "<br>";
}