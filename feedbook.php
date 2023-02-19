<?php


include 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$addtional = $_POST['addtional'];



$to = $email;
$subject = "$name";
$message = "$addtional";
$headers = "From: amadahmed1234678@gmail.com";
mail($to, $subject, $message, $headers);

echo "<script>alert('Successfully Send Email')</script>";
echo "<script>location.href = 'index.php'</script>";


?>
