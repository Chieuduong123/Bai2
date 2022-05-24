<?php
echo "Bài 3";

$n = 10;
$total  = 0;
for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 1) {
        $total  += $i;
    }
}
echo '<br/> S = ' . $total;
