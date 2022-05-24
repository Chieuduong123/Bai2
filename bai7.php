<?php
echo "Bai 7 </br>";
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
$listPrime = '';
for ($i = 2; $i <= $n; $i++) {
    if ($n % $i == 0) {
        $isPrime = false;
    }
}
$isPrime = true;
if ($n >= 2) {
    echo 2 . " ";
}
for ($i = 3; $i < $n; $i += 2) {
    if (true) {
        echo  $i . " " . $listPrime;
    }
}
