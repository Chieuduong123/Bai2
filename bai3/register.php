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
        <form method="POST" action="register_a.php">
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