<?php
// $conn = mysqli_connect('remotemysql.com', 'HOmIeyfXK6', 'tXQOS2PF2N', 'HOmIeyfXK6') or die('Connect fail');
// mysqli_set_charset($conn, 'UTF8');
$mysqli = new mysqli("remotemysql.com","HOmIeyfXK6","tXQOS2PF2N","HOmIeyfXK6");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}else{
  echo "Yep! Database Connected...";
}
session_start();
if (isset($_SESSION['name'])) {
    unset($_SESSION['name']);
}

if (isset($_POST['login'])) {

    $name = addslashes($_POST['name']);
    $pass = $_POST['password'];
    $password = md5($pass);

    $query = "SELECT name, password FROM demo WHERE name = '$name' and password = '$password'";

    $result = $mysqli->query($query);


     $row = mysqli_fetch_array($result);
     $_SESSION['name'] = $name;
     echo "Hello <i>" . $name . "</i>. Welcome to here. <a href=''>Exit</a>";
     die();
     $connect->close();

//    include('home.php');
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