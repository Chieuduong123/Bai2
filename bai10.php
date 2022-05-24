<?php
echo "Bài 10 <br>";

$km = 7;
$money = 0;

if ($km == 1) {
    $money = $km * 15000;
} else if ($km > 1 && $km <= 5) {
    $money = ($km - 1) * 12000;
} else if ($km >= 6) {
    $money = ($km - 5) * 90000;
} else if ($km >= 6 && $km >= 140) {
    $money = ($km - 5) * 90000 * 0.12;
}

echo "Tong Tien Can Thanh Toan: "  . $money;
