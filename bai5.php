<?php

echo "Bài 5 </br>";

$n = 9;
$total = 0;
$i = 1;
while ($i <= $n) {
    $j = 1;
    $multiply = 1;
    while ($j <= $i) {
        $multiply *= $j;
        $total += $multiply;
        $j++;
    }
    $i++;
}
echo '<br/> S = ' . $total;
