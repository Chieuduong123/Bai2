<?php
$conn = mysqli_connect('ec2-52-86-115-245.compute-1.amazonaws.com', 'akebfzmfhsaguw', '520bc516ece2f6a521c0e2abf3060b153df382114156477d64a2ba56630aeaf1', 'dcotvmj72tgmke') or die('Connect fail');

if (isset($_POST['registerBtn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    $query = mysqli_query($conn, "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");
    echo 'Đăng ký thành công!';
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
            <h1>Register</h1>
            <div class="content">
                <div class="input-field">
                    <input type="text" name="name" placeholder="Name">
                </div>
                <div class="input-field">
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="input-field">
                    <input type="password" name="password" placeholder="Password">
                </div>
            </div>
            <div class="action">
                <button type="submit" class="btn" name="registerBtn">Register</button>
            </div>
        </form>
    </div>
    <script src="js.js"></script>

</body>

</html>