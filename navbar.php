<?php

session_start();

?>

<!DOCTYPE html>
<html>

    <head>
        <link rel="shortcut icon" type="png" href="images/icon/favicon.png" />
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Comaptible" content="IE=edge" />
        <title>E-Learning</title>
        <meta name="desciption" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/nav.css" />
        <link rel="stylesheet" href="css/footer.css" />
        <script type="text/javascript" src="script.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <script>
        $(window).on("scroll", function() {
            if ($(window).scrollTop()) {
                $("nav").addClass("black");
            } else {
                $("nav").removeClass("black");
            }
        });
        </script>


        <style>
        header {
            height: 70vh;
        }

        .addcourse {
            text-align: center;
            width: 300px;
            margin: auto;

        }

        .addcourse a {
            background: #000;
            color: white;
            padding: 1rem 1rem 1rem 1rem;
        }
        </style>

    </head>


    <body>
       

   



    <nav style='margin-bottom:30rem'>
	<input id="nav-toggle" type="checkbox">
	<div class="logo"> <a href="" class="elearn">E-Learning</a></div>
	<ul class="links">
    <li><a href="">Home</a></li>
    <li><a href="#courses">Courses</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#portfolio">Portfolio</a></li>
    <li><a href="#services_section">Services</a></li>
    <li><a href="#contactus">Contact</a></li>
    <li><a href="#feedback">Feedback</a></li>
    <li><a href="quiz/welcome.php?q=1">Quiz</a></li>

    <?php
      if (isset($_SESSION['email'])) {
        echo '<li><a class="get-started DonateNow" href="logout.php">Logout</a></li>';
      } else if (isset($_SESSION['admin'])) {
        echo '<li><a class="get-started DonateNow" href="logout.php">Logout</a></li>';
      } else {
        echo '<li><a class="get-started DonateNow" href="login.php">Login</a></li>';
      }
      ?>

	

	</ul>
	<label for="nav-toggle" class="icon-burger">
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
	</label>
</nav>


    <script src="js/nav.js"></script>

        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>

    </body>

</html>