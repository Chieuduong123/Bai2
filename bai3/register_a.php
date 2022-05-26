<?php
include('database.php');

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];


    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Two password do not match");
    }

    $sql = "SELECT * FROM students WHERE username = '$username' OR email = '$email'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="register.php";</script>';

        die();
    } else {
        $sql = "INSERT INTO students (username, password, email) VALUES ('$username','$password','$email')";
        echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="register.php";</script>';

        mysqli_query($conn, $sql);
}
}