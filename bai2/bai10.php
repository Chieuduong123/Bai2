<?php
echo "Bài 10 <br>";

$km = 0;
if (isset($_POST['km'])) {
    $km = $_POST['km'];
}
?>

<form action="#" method="post">
    <table>
        <tr>
            <td>Nhập giá trị km:</td>
            <td><input type="text" name="km" value="<?= $km ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Kết quả"></td>
        </tr>
    </table>
</form>
<?php

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
