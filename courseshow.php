<?php include('navbar2.php') ?>
    <?php
    $topic = $_GET['id'];

?>


<div class="container">
<h1 class="text-center mt-5 mb-5"style = "margin-top:10rem">Courses</h1>
<div class="row mt-5">

<?php

include 'config.php';

$alldata = mysqli_query($conn, "SELECT * FROM course WHERE topic_id = '$topic'");

while ($row = mysqli_fetch_array($alldata)) {
    
    echo "<div class='col-lg-4'>
                <div class='card me-4 text-center' style='width: 18rem;'>
                <iframe width='285px' height='215' src='https://www.youtube.com/embed/aqvDTCpNRek' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                <div class='card-body'>
                    <h4 class='card-title'>$row[title]</h4>
                    <p class='card-text'>$row[description]</p>
                </div>
                </div>
                </a>
        </div>";
}
?>


</div>

</div>

<footer>
    <p>Copyright &copy; 2022 <img src="images/icon/favicon.png" alt="logo"> All Rights Reserved.</p>
</footer>

    