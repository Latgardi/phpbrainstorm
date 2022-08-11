<?php
function getPerfectNums(int $n, int $m)
{
    for ($i = $n; $i <= $m; $i++) {
        $sum = 0;
        for ($j = 1; $j < $i; $j++) {
            if ($i % $j == 0) {
                $sum += $j;
            }
        }
        if ($i == $sum) {
            echo $i . "\n";
        }
    }
}

getPerfectNums(2, 50000);