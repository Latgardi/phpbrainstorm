<?php
function getNumbers()
{
    for ($i = 1000; $i <= 9999; $i++) {
        $o = $i % 10;
        $d = intdiv($i % 100, 10);
        $h = intdiv($i % 1000, 100);
        $t = intdiv($i % 10000, 1000);
        if ($o == $d or $o == $h or $o == $t
            or $d == $h or $d == $t or $h == $t) {
            continue;
        }
        echo $i . "\n";
    }
}

getNumbers();