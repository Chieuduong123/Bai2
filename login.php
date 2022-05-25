<?php

$conn = mysqli_connect('localhost', 'root', '', 'list') or die('Connect fail');
mysqli_set_charset($conn, 'UTF8');
session_start();
if (isset($_SESSION['name'])) {
    unset($_SESSION['name']);
}

if (isset($_POST['login'])) {

    $name = addslashes($_POST['name']);
    $pass = $_POST['password'];
    $password = md5($pass);

    $query = "SELECT name, password FROM users WHERE name = '$name' and password = '$password'";

    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $row = mysqli_fetch_array($result);

   include('home.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="login-form">
        <form method="POST" action="<?php ($_SERVER['PHP_SELF']) ?>">
            <h1>Login</h1>
            <div class="content">
                <div class="input-field">
                    <input type="text" name="name" placeholder="Name">
                </div>
                <div class="input-field">
                    <input type="password" name="password" placeholder="Password">
                </div>
            </div>
            <div class="action">
                <button type="submit" class="btn" name="login">Login</button>
            </div>
        </form>
    </div>
    <script src="js.js"></script>

</body>

</html>