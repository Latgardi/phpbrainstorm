<?php
function getNumbers()
{
    for ($i = 1000; $i <= 9999; $i++) {
        $neededNumber = true;
        for ($number = $i; $number > 0; $number = intdiv($number, 10)) {
            $lastNum = $number % 10;
            if ($lastNum != 0 and $lastNum != 2 and $lastNum != 3 and $lastNum != 7) {
                $neededNumber = false;
            }
        }
        if ($neededNumber) {
            echo $i . "\n";
        }
    }
}

getNumbers();
