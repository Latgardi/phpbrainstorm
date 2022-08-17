<?php
function getNumbers()
{
    for ($i = 1234; $i <= 9999; $i++) {
        $result = 0;
        for ($j = 0; $j <= 9; $j++) {
            for ($number = $i; $number > 0; $number = intdiv($number, 10)) {
                if ($number % 10 == $j) {
                    $result *= 10;
                    $result += $j;
                }
            }
        }
        if ($result == 237) {
            echo $i . "\n";
        }
    }
}

getNumbers();

