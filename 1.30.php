<?php
function isPrime(int $number): bool
{
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function findTwins($limit)
{
    for ($i = 1; $i <= $limit; $i++) {
        if (isPrime($i) and isPrime($i + 2)) {
            printf("(%s, %s)\n", $i, $i + 2);
        }
    }
}

findTwins(1000);