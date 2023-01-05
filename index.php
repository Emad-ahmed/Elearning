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
        <link rel="stylesheet" type="text/css" href="style.css" />
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
        <!-- Navigation Bar -->
        <header id="header">
            <nav>
                <div>
                    <a href="" class="elearn">E-Learning</a>
                </div>
                <ul class="mt-3">
                    <li><a href="">Home</a></li>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#services_section">Services</a></li>
                    <li><a href="#contactus">Contact</a></li>
                    <li><a href="#feedback">Feedback</a></li>
                    <li><a href="quiz/">Quiz</a></li>
                </ul>
                <div class="srch">
                    <input type="text" class="search" placeholder="Search here..." /><img src="images/icon/search.png"
                        alt="search" />
                </div>
                <?php
      if (isset($_SESSION['email'])) {
        echo '<a class="get-started" href="logout.php">Logout</a>';
      } else if (isset($_SESSION['admin'])) {
        echo '<a class="get-started" href="logout.php">Logout</a>';
      } else {
        echo '<a class="get-started" href="login.php">Login</a>';
      }
      ?>
                <img src="images/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu" />
            </nav>



            <div class="csec"></div>

            <div class="head-container">
                <div class="quote">
                    <p>
                        The beautiful thing about learning is that nobody can take it away
                        from you
                    </p>
                    <h5>
                        Education is the process of facilitating learning, or the
                        acquisition of knowledge, skills, values, beliefs, and habits.
                        Educational methods include teaching, training, storytelling,
                        discussion and directed research!
                    </h5>
                    <div class="play">
                        <img src="images/icon/play.png" alt="play" /><span><a href="#" target="_blank">Watch
                                Now</a></span>
                    </div>
                </div>
                <div class="svg-image">
                    <img src="images/extra/svg1.jpg" alt="svg" />
                </div>
            </div>

        </header>



        <!-- Some Popular Subjects -->
        <div class="title" id="courses">

            <center>
                <p style="
            font-size: 50px;
            padding: 100px;
            padding-bottom: 10px;
            color: black;
          ">
                    Courses
                </p>
            </center>
        </div>
        <br /><br />
        <div class="course">

            <center>



                <?php
      if (isset($_SESSION['admin'])) {
        echo '<div class="text-center addcourse"> <a href="addcourse.php">Add Course</a></div>
        <div class="text-center addcourse"> <a href="viewcourse.php" class="ms-5">View Course</a></div>
        
        ';
      }
      ?>

                <div class="cbox">
                    <div class="course_list">
                        <a href="python.php"><img src="images/courses/book.png" />Python</a>
                    </div>
                    <div class="course_list">
                        <a href="cplus.php"><img src="images/courses/d1.png" />C++</a>
                    </div>
                    <div class="course_list">
                        <a href="c.php"><img src="images/courses/paper.png" />C</a>
                    </div>
                    <div class="course_list">
                        <a href="java.php"><img src="images/courses/d1.png" />Java</a>
                    </div>
                    <div class="course_list">
                        <a href="physics.php"><img src="images/courses/d1.png" />Physics</a>
                    </div>
                    <div class="course_list">
                        <a href="che.php"><img src="images/courses/d1.png" />Chemistry</a>
                    </div>
                    <div class="course_list">
                        <a href="math.php"><img src="images/courses/d1.png" />Math</a>
                    </div>

                </div>
            </center>


        </div>

        <!-- ABOUT -->
        <div class="container mt-5 " id="about">
            <center>
                <p style="
            font-size: 50px;
            padding-bottom: 10px;
            color: black;
          ">
                    About
                </p>
            </center>
            <div class="row">
                <div class="col-lg-6">
                    <img src="images/extra/e3.jpg" alt="">
                </div>

                <div class="col-lg-6">
                    Education is the passport to the future, for tomorrow belongs to
                    those who prepare for it today.” “Your attitude, not your aptitude,
                    will determine your altitude.” “If you think education is expensive,
                    try ignorance.” “The only person who is educated is the one who has
                    learned how to learn …and change.
                </div>

            </div>
        </div>

        <!-- PORTFOLIO -->
        <div class="diffSection" id="portfolio">
            <center>
                <p style="font-size: 50px; padding: 100px; padding-bottom: 40px; color:black;">
                    Portfolio
                </p>
            </center>
            <div class="content">
                <p>
                    “Education is the passport to the future, for tomorrow belongs to
                    those who prepare for it today.” “Your attitude, not your aptitude,
                    will determine your altitude.” “If you think education is expensive,
                    try ignorance.” “The only person who is educated is the one who has
                    learned how to learn …and change.”
                </p>
            </div>
        </div>
        <div class="extra">
            <p>We're increasing this data every year</p>
            <div class="smbox">
                <span>
                    <center>
                        <div class="data">154</div>
                        <div class="course_list">Enrolled Students</div>
                    </center>
                </span>
                <span>
                    <center>
                        <div class="data">62</div>
                        <div class="course_list">Total Courses</div>
                    </center>
                </span>
                <span>
                    <center>
                        <div class="data">56</div>
                        <div class="course_list">Paid Students</div>
                    </center>
                </span>
            </div>
        </div>

        <!-- SERVICES -->
        <div class="service-swipe">
            <div class="diffSection" id="services_section">
                <center>
                    <p style="
              font-size: 50px;
              padding: 100px;
              padding-bottom: 40px;
              color: white;
            ">
                        Services
                    </p>
                </center>
            </div>
            <a href="freeonline.php">
                <div class="s-card">
                    <img src="images/icon/computer-courses.png" />
                    <p>Free Online Computer Courses</p>
                </div>
            </a>


        </div>



        <!-- CONTACT US -->
        <div class="diffSection" id="contactus">
            <center>
                <p style="font-size: 50px; padding: 100px; color: black;">Contact Us</p>
            </center>

            <div class="back-contact">
                <div class="cc">
                    <form action="mailto:elearning@gmail.com" method="post" enctype="text/plain">
                        <label>First Name <span class="imp">*</span></label><label style="margin-left: 130px">Last Name
                            <span class="imp">*</span></label><br />
                        <center>
                            <input type="text" name="" style="margin-right: 10px; width: 175px"
                                required="required" /><input type="text" name="lname" style="width: 175px"
                                required="required" /><br />
                        </center>
                        <label>Email <span class="imp">*</span></label><br />
                        <input type="email" name="mail" style="width: 100%" required="required" /><br />
                        <label>Message <span class="imp">*</span></label><br />
                        <input type="text" name="message" style="width: 100%" required="required" /><br />
                        <label>Additional Details</label><br />
                        <textarea name="addtional"></textarea><br />
                        <button type="submit" id="csubmit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- FEEDBACK -->
        <div class="feedback text-center" id="feedback">
            <center>
                <p style="
            font-size: 50px;
            padding-bottom: 10px;
            padding-right: 100px;
            color: black;
          ">
                    Give Feedback
                </p>
            </center>
        </div>

        <div class="feedbox">
            <div class="feed">
                <form action="mailto:elearning@gmail.com" method="post" enctype="text/plain">
                    <label>Your Name</label><br />
                    <input type="text" name="" class="fname" required="required" /><br />
                    <label>Email</label><br />
                    <input type="email" name="mail" required="required" /><br />
                    <label>Additional Details</label><br />
                    <textarea name="addtional"></textarea><br />
                    <button type="submit" id="csubmit">Send Message</button>
                </form>
            </div>

        </div>

        <!-- Sliding Information -->
        <marquee style="
        background: #DF2771;
        margin-top: 50px;" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="10">
            <div class="marqu">
                “Education is the passport to the future, for tomorrow belongs to those
                who prepare for it today.” “Your attitude, not your aptitude, will
                determine your altitude.” “If you think education is expensive, try
                ignorance.” “The only person who is educated is the one who has learned
                how to learn …and change.”
            </div>
        </marquee>

        <!-- FOOTER -->
        <footer>
            <p>Copyright &copy; 2022 <img src="images/icon/favicon.png" alt="logo"> All Rights Reserved.</p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>

    </body>

</html>