<?php

include('database.php');
session_start();

require "PHPMailer/PHPMailer.php";  
require "PHPMailer/SMTP.php";
require 'PHPMailer/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = htmlspecialchars($_POST['password']);
    $email = $_POST['email'];
    $passwordMahoa=md5($password);
    // var_dump($email);
    // exit;
    $cpassword = htmlspecialchars($_POST['cpassword']);
    $verify_mail = md5(rand());

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Two password do not match");
    }
    if (empty($cpassword)) {
        echo '<script language="javascript">alert("Please confirm password"); window.location="register.php";</script>';
    } else {
        if ($password !== $cpassword) {
            echo '<script language="javascript">alert("Password do not match"); window.location="register.php";</script>';
        }
    }

    $sql = "SELECT * FROM persons WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="register.php";</script>';
        die();
    } else {
        $sql = "INSERT INTO persons (username, password, email, verify_mail) VALUES ('$username','$passwordMahoa','$email', '$verify_mail')";

        $query_run = mysqli_query($conn, $sql);
        if( $query_run == TRUE)
        {
            echo '<script language="javascript">alert("Register Successfull! Please Check Your Email or Spam Email"); window.location="login.php";</script>';
        }
        else
        {
            echo '<script language="javascript">alert("Register Fail"); window.location="register.php";</script>';
        }
        $PHPMailer = new PHPMailer(true);

        try {
            $PHPMailer->SMTPDebug = 0;
            $PHPMailer->isSMTP();
            $PHPMailer->Host = 'smtp.gmail.com';
            $PHPMailer->SMTPAuth = true;
            $PHPMailer->Username = 'anhd10315@gmail.com';
            $PHPMailer->Password = 'vwsypottasjcjkwx';
            $PHPMailer->SMTPSecure = 'ssl';
            $PHPMailer->Port = 465;
            $PHPMailer->setFrom('anhd10315@gmail.com', 'anhduong');
            $PHPMailer->addAddress($email);
            $PHPMailer->isHTML(true);
            $PHPMailer->Subject = 'Email verification';
            $PHPMailer->Body = "<h2>You have Register! Welcome to here!</h2>";
            $PHPMailer->send();
        } catch (Exception $exception) {
            echo $PHPMailer->ErrorInfo;
        }
    }
}

    // $mail = new PHPMailer(true);
    // $mail->SMTPDebug = 0;
    // $mail->isSMTP();
    // $mail->Host = 'smtp.gmail.com';
    // $mail->SMTPAuth = true;
    // $mail->Username = 'anhd10315@gmail.com';
    // $mail->Password = 'vwsypottasjcjkwx';
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    // $mail->Port = 587;
    // $mail->setFrom('anhd10315@gmail.com', 'anhduong');
    // $mail->addAddress($email);
    // var_dump($email);
    // $mail->isHTML(true);
    // $mail->Subject = 'Email verification';
    // $email_template = "<h2>You have Register! Welcome to here!</h2>";
    // $mail->Body = $email_template;
    // $mail->send();
    // echo "Message sent";
