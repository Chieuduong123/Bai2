<?php
echo "Bài 1";
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
    $total  += $i;
}
echo '<br/> Tổng = ' . $total;
