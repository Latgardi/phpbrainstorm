<?php
function makeMax(int $number)
{
    $result = 0;
    for ($i = 9; $i >= 0; $i--) {
        $a = $number;
        while ($a > 0) {
            if ($a % 10 == $i) {
                $result *= 10;
                $result += $i;
            }
            $a = intdiv($a, 10);
        }
    }
    return $result;
}

function maxNumberValues(int $m): array
{
    $result = array();
    for ($i = 1; $i <= $m; $i++) {
        $result[$i] = makeMax($i);
    }
    return $result;
}

print_r(maxNumberValues(1000));
