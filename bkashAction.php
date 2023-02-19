<?php
include 'config.php';

session_start();

$id = $_GET['id'];
$mobile = $_POST['mobile'];

$email = $_SESSION['email'];
echo $email;
$datafetchquery = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'");
$data = mysqli_fetch_array($datafetchquery);
$user_id = $data['id'];

echo $user_id;


$datafetchquerycourse = mysqli_query($conn, "SELECT * FROM `category_course` WHERE id = '$id'");
$datacourse = mysqli_fetch_array($datafetchquerycourse);
$course_id = $data['id'];


echo $course_id;




$insert_product = mysqli_query($conn, "INSERT INTO `bkash_payment`(`course_id`, `user_id`, `mobile_number`) VALUES ('$course_id','$user_id','$mobile')");


if ($insert_product)     {
    echo "<script>alert('Bkash Payment Done')</script>";
    $updatequery = mysqli_query($conn, "UPDATE `category_course` SET `paid_or_free`='Free' WHERE id='$id'");
    echo "<script>location.href = 'payforcourse.php?id=$id'</script>";
} else {
    echo "<script>alert('Bkash Payment Not Done!')</script>";
    echo "<script>location.href = 'payforcourse.php?id=$id'</script>";
}
