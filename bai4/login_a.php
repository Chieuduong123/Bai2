<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
if (isset($_POST['login'])) {
    include('database.php');
    $username = addslashes($_POST['username']);
    $password = $_POST['password'];
    $passwordMahoa=md5($password);
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    $query = "SELECT username, password FROM persons WHERE username = '$username' and password = '$passwordMahoa'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    include('home.php');
}
