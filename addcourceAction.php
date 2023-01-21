<?php

include 'config.php';

$topic = $_POST['topic'];
$title = $_POST['title'];
$description = $_POST['description'];
$video_link = $_POST['video_link'];

echo $topic;


$datafetchquery = mysqli_query($conn, "SELECT * FROM `category_course` WHERE id = '$topic'");
$data = mysqli_fetch_array($datafetchquery);
$user_id = $data['id'];


echo $user_id;





$insert_query = mysqli_query($conn, "INSERT INTO `course`(`topic_id`, `title`, `description`, `video_link`) VALUES ('$user_id','$title','$description','$video_link')");
echo "<script>alert('Successfully Inserted Course')</script>";
echo "<script>location.href = 'index.php'</script>";