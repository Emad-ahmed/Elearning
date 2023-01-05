<?php


include 'config.php';


$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$ccpass = $_POST['cpassword'];
$mainpass = md5($pass);
$cpass = md5($_POST['cpassword']);



$_name_pattern = "/^[a-zA-Z. ]+$/";
$_emailPattern = "/^[a-zA-Z0-9_-]{3,}@[a-zA-Z0-9_-]{3,}\.[a-zA-Z]{2,4}$/";
$_password_pattern = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/";



$_duplicate_email = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'"); 



if (mysqli_num_rows($_duplicate_email) > 0) {
    echo "<script>alert('Email Already Taken')</script>";
    echo "<script>location.href = 'register.php'</script>";
} elseif (!preg_match($_name_pattern, $name)) {
    echo "<script>alert('Invalid Username')</script>";
    echo "<script>location.href = 'register.php'</script>";
} elseif (!preg_match($_emailPattern, $email)) {
    echo "<script>alert('Invalid Email')</script>";
    echo "<script>location.href = 'register.php'</script>";
} elseif (!preg_match($_password_pattern, $pass)) {
    echo "<script>alert('Invalid Password')</script>";
    echo "<script>location.href = 'register.php'</script>";
} elseif ($pass !== $ccpass) {
    echo "<script>alert('Password Not Match')</script>";
    echo "<script>location.href = 'register.php'</script>";
} else {
    $insert_query = "INSERT INTO `user`(`name`,  `email`,  `password`) VALUES ('$name', '$email','$mainpass')";
    mysqli_query($conn,  $insert_query);
    echo "<script>alert('Successfully Inserted')</script>";
    echo "<script>location.href = 'login.php'</script>";
}
