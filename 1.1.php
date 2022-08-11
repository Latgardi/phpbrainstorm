<?php
function getNumbers(int $number): int
{
    $counter = 0;
    while ($number > 0) {
        $lessNumber = $number / 10;
        $lastNumber = intval(($lessNumber - intval($lessNumber)) * 10);
        if ($lastNumber < 5) {
            $counter++;
        }
        $number = intval($lessNumber);
    }
    return $counter;
}

echo getNumbers(5340982);