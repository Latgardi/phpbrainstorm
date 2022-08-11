<?php
function directOrder(int $number): int
{
    $result = 0;
    for ($i = 0; $i <= 9; $i++) {
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

echo directOrder(14278453);
