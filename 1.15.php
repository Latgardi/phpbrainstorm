<?php
function getDivisors(int $number): int
{
    $divisorsCount = 0;
    for ($i = 1; $i <= $number; $i++)
    {
        if ($number % $i == 0) {
            $divisorsCount += 1;
        }
    }
    return $divisorsCount;
}

echo getDivisors(1645);