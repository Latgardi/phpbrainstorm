<?php
function isPrime($number)
{
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function areTwins()
{
    $twins = 0;
    for ($i = 2; $twins < 10; $i++) {
        if (isPrime($i) and isPrime($i + 2)) {
            printf("(%s, %d)\n", $i, $i + 2);
            $twins++;
        }
    }
}

areTwins();

