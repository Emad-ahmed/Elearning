<?php

include 'config.php';

$topic = $_POST['topic'];
$name_of_course= $_POST['name_of_course'];
$name_of_teacher = $_POST['name_of_teacher'];
$paid = $_POST['paid'];
$course_amount = $_POST['course_amount'];

$image = $_FILES['image'];


$imageLocation = $image['tmp_name'];
$imageName = $image['name'];

$imageDes = 'CategoryImage/' . $imageName;


move_uploaded_file($imageLocation, $imageDes);





$insert_query = mysqli_query($conn, "INSERT INTO `category_course`(`topic`, `name_of_course`, `name_of_teacher`, `paid_or_free`, `image`, `course_amount`) VALUES ('$topic','$name_of_course','$name_of_teacher','$paid','$imageDes', '$course_amount')");
echo "<script>alert('Successfully Inserted Course')</script>";
echo "<script>location.href = 'addcourse.php'</script>";