<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
if (isset($_POST['login'])) 
{
    include('database.php');
    $username = addslashes($_POST['username']);
    $password = $_POST['password'];
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    $query = "SELECT username, password FROM members WHERE username = '$username' and password = '$password'";

    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     
    $row = mysqli_fetch_array($result);
     
    if ($password != $row['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    $_SESSION['username'] = $username;
    echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công</a>";
    die();
}
?>