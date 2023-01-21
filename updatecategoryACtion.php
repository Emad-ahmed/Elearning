<?php
include 'config.php';
$id = $_POST['id'];


$topic = $_POST['topic'];
$name_of_course = $_POST['name_of_course'];
$name_of_teacher = $_POST['name_of_teacher'];
$paid = $_POST['paid'];
$image = $_FILES['image'];
$oldImage = $_POST['oldImage'];


$imageLocation = $image['tmp_name'];
$imageName = $image['name'];
$imageDes = "CategoryImage/" . $imageName;


if (strlen($imageDes) > 14) {
    $updateQuery = "UPDATE `category_course` SET `topic`='$topic',`name_of_course`='$name_of_course',`name_of_teacher`='$name_of_teacher',`paid_or_free`='$paid',`image`='$imageDes' WHERE id='$id'";
    move_uploaded_file($imageLocation, $imageDes);
} else {

    $updateQuery = "UPDATE `category_course` SET `topic`='$topic',`name_of_course`='$name_of_course',`name_of_teacher`='$name_of_teacher',`paid_or_free`='$paid',`image`='$oldImage' WHERE id='$id'";
    move_uploaded_file($imageLocation, $oldImage);
}


if (!mysqli_query($conn, $updateQuery)) {

    die("Not updated!");
} else {

    echo "<script>alert('Data updated!!')</script>";
    echo "<script>location.href='viewcourse.php'</script>";
}
