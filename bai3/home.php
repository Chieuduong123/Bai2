<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 style="text-align:center ;">HOME PAGE</h1><br><br>
    <h2 style="text-align:center ;">
        <?php
        $_SESSION['name'] = $username;
        echo "Hello <i>" . $username . "</i>. Welcome to here. <a href=''>Exit</a>";
        die();
        $connect->close();
        ?>
    </h2>
</body>

</html>