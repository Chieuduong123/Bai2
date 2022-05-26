<?php

echo "Bài 5 </br>";

$n = 0;
if (isset($_POST['n'])) {
    $n = $_POST['n'];
}
?>
<form action="#" method="post">
    <table>
        <tr>
            <td>Nhập giá trị n:</td>
            <td><input type="text" name="n" value="<?= $n ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Kết quả"></td>
        </tr>
    </table>
</form>
<?php
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
