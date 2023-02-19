<?php include('navbar2.php') ?>
    <?php
    $topic = $_GET['topic'];
    
?>

<?php
include 'config.php';

if(isset($_SESSION['email']))
{
  $email = $_SESSION['email'];    
  $data = mysqli_query($conn, "SELECT * FROM `user` WHERE email='$email'");
  $dataprofile = mysqli_fetch_array($data);

  $id = $dataprofile['id'];
}


?>

<style>

  img
  {
    width:100%;
  }

  .bkashbtn {
    margin-top: 1rem;
    background: #e63582;
    color: white;
    padding: 7px;
    padding-left: 3rem;
    padding-right: 3rem;
    margin-bottom: 1rem;
    text-decoration: none;
    border-radius: 10px;
  }


  .modal-dialog {
    background: #e63582;
  }

  .modal-content {
    background: #e63582;
  }

  .bkash-border {
    background-color: #e63582;
    width: 28rem;
    height: 28rem;
    margin: auto;
    text-align: center;
    border-radius: 10px 10px 10px 10px;
  }

  .sub-border {
    width: 26rem;
    position: absolute;
    margin-top: 4%;
    margin-left: 4%;
    height: 10rem;
    background-color: #e63582;
    box-shadow: 2px 2px 2px 2px;
    border-radius: 10px 10px 10px 0px;
  }

  .sub-border h6 {
    margin-top: 5%;
    margin-bottom: 8%;
    color: white;
  }

  .my_payment_img {
    position: absolute;
    width: 35rem;
    left: 29%;
    height: 7rem;
    object-fit: cover;
  }

  .bkash-form {
    margin-top: 8%;
  }

  .new-input {
    border-radius: 5px 5px 0px 5px;
    padding: 4px;
  }

  .label1 {
    font-size: 1.2rem;
    color: white;
  }

  .form-check-label {
    color: white;
  }

  .bbtn {
    background: #e6a8c1;
  }
  .proced
  {
    margin-left: 7.4rem;
  }
  .form-check-input
  {
    position: relative;
    left:5rem;
  }
  .phoneview
  {
    position: absolute;
    top:23.5rem;
    left:11rem;
  }
</style>


<div class="container" style="margin-top:-20rem;">
<h1 class="text-center mb-5">Free Courses</h1>

<div class="row ">

<?php
include 'config.php';

$alldata = mysqli_query($conn, "SELECT * FROM category_course WHERE topic = '$topic' AND paid_or_free = 'Free'");

while ($row = mysqli_fetch_array($alldata)) {
    

    echo "<div class='col-lg-4'>
            <a href='courseshow.php? id=$row[id]'>
                <div class='card me-4 text-center' style='width: 18rem;'>
                <img src='$row[image]' alt=''>
                <div class='card-body'>
                    <h4 class='card-title'>$row[name_of_course]</h4>
                    <p class='card-text'>Instructor: $row[name_of_teacher]</p>
                </div>
                </div>
                </a>
        </div>";
}
?>





</div>

</div>
<div class="container">

<div class="row mt-5 mb-5 m-auto">

<h1 class="text-center mt-5 mb-5">Paid Courses</h1>

<?php

include 'config.php';

$alldata = mysqli_query($conn, "SELECT * FROM category_course WHERE topic = '$topic' AND paid_or_free = 'Paid'   ");

while ($row = mysqli_fetch_array($alldata)) {

    echo "
    <div class='col-lg-4'>
        <a href='payforcourse.php?id=$row[id]'>
                <div class='card me-4 pb-5 text-center' style='width: 18rem;'>
                    <img src='$row[image]' alt=''>
             
                        <h4 class='card-title mt-4'>$row[name_of_course]</h4>
                        <p class='card-text'>Instructor: $row[name_of_teacher]</p>
                        <div class='w-50 m-auto mt-4'>
                        <a href='payforcourse.php?id=$row[id]'  class='btn btn-info'>Add To Cart</a>
                    </div>
                    </div>
                   
                </div>
            </a>
    </div>";
}
?>

</div>

</div>


    <script>
       function handleClick(event) {
        console.log(event.target);
      }
    </script>



<footer>
  <p>Copyright &copy; 2022 <img src="images/icon/favicon.png" alt="logo"> All Rights Reserved.</p>
</footer>

    