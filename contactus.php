<?php


include 'config.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST['message'];
$addtional = $_POST['addtional'];



$to = $email;
$subject = "$fname $lname";
$message = "$message \n $addtional";
$headers = "From: amadahmed1234678@gmail.com";
mail($to, $subject, $message, $headers);

echo "<script>alert('Successfully Send Email')</script>";
echo "<script>location.href = 'index.php'</script>";


?>
