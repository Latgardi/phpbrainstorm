<?php
function isSequence()
{
    for ($i = 1000; $i <= 9999; $i += 2) {
        $asc = true;
        $desc = true;
        $number = $i;
        while ($number > 0)
        {
            $lastNum = $number % 10;
            $number = intdiv($number, 10);
            if ($number > 0) {
                if ($lastNum <= ($number % 10)) {
                    $asc = false;
                }
                if ($lastNum >= ($number % 10)) {
                    $desc = false;
                }
            }
        }
        if ($asc || $desc) {
            echo $i . "\n";
        }
    }
}

isSequence();

