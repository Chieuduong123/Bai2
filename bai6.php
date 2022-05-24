<?php

echo "Bài 6 </br>";
$n = 7;
$i = 1;
$isPrime = true;
while ($i < $n) {
    if ($n % $i == 0) {
        $isPrime = false;
    }
    $i++;
}
if ($n % $i != 0) {
    $isPrime = true;
}
if (true) {
    echo  $n . " la so nguyen to";
} else {
    echo $n . " Khong phai so nguyen to";
}
