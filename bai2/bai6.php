<?php

echo "Bài 6 </br>";
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

function check_prime($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}

if(check_prime($n))
    echo $n. " là số nguyên tố";
else
    echo $n. " không phải số nguyên tố";
