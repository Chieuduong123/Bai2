<?php
echo "Bai 2 </br>";
$n = 20;
$total = 0;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        $multiply = 1;
        $multiply = $i * $j;
    }
    $total += $multiply;
}
echo "Tong: " . $total;
