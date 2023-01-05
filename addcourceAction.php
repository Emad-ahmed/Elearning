<?php

include 'config.php';

$topic = $_POST['topic'];
$title = $_POST['title'];
$description = $_POST['description'];
$video_link = $_POST['video_link'];


$image = $_FILES['image'];


$imageLocation = $image['tmp_name'];
$imageName = $image['name'];

$imageDes = 'courseImage/' . $imageName;


move_uploaded_file($imageLocation, $imageDes);





$insert_query = mysqli_query($conn, "INSERT INTO `course`( `topic`, `title`, `description`, `video_link`, `image`) VALUES ('$topic','$title','$description','$video_link','$imageDes')");
echo "<script>alert('Successfully Inserted Course')</script>";