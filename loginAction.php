<?php

include 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];
$pass = md5($password);

$_result = mysqli_query($conn, "SELECT * FROM `user` WHERE email ='$email' And password='$pass'");


if (mysqli_num_rows($_result)) {
    session_start();
    $_SESSION['email'] = $email;
    echo "<script>alert('Login Successfull')</script>";
    echo "<script>location.href = 'index.php'</script>";
} elseif ($email == "admin12@gmail.com" && $password == "12345") {
    session_start();
    $_SESSION['admin'] = $email;
    echo "<script>location.href = 'index.php'</script>";
} else {
    echo "<script>alert('Incorrect Username Or Password')</script>";
    echo "<script>location.href = 'login.php'</script>";
}