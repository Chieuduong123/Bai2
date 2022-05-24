<?php
echo "Bài 4";

$n = 20;
$total  = 0;
for ($i = 1; $i <= $n; $i = $i + 2) {
        $total  += $i;
}
echo '<br/> S = ' . $total;
