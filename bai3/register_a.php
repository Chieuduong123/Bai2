<?php
include('database.php');

if(isset($_POST['registerBtn'])){
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];


if (empty($name)) {
array_push($errors, "Username is required"); 
}
if (empty($email)) {
array_push($errors, "Email is required"); 
}
if (empty($password)) {
array_push($errors, "Two password do not match"); 
}

$sql = "SELECT * FROM users WHERE username = '$name' OR email = '$email'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="register.php";</script>';

die ();
}
else {
$sql = "INSERT INTO users (name, password, email) VALUES ('$name','$password','$email')";
echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="register.php";</script>';

if (mysqli_query($conn, $sql)){
echo "Tên đăng nhập: ".$_POST['name']."<br/>";
echo "Mật khẩu: " .$_POST['password']."<br/>";
echo "Email đăng nhập: ".$_POST['email']."<br/>";
}
else {
echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
}
}
}
?>