<?php
echo "Bài 3";

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
$total  = 0;
for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 1) {
        $total  += $i;
    }
}
echo '<br/> S = ' . $total;
