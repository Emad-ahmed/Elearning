
<?php include('navbar.php') ?>

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
        .myimg
        {
            width:30rem;
        }
       
        </style>

    


    
        <header id="header">
           

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
            margin-top:-12rem;
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
                        <a href="coursedata.php?topic=Python"><img src="images/courses/book.png" />Python</a>
                    </div>
                    <div class="course_list">
                        <a href="coursedata.php?topic=C++"><img src="images/courses/d1.png" />C++</a>
                    </div>
                    <div class="course_list">
                        <a href="coursedata.php?topic=c"><img src="images/courses/paper.png" />C</a>
                    </div>
                    <div class="course_list">
                        <a href="coursedata.php?topic=java"><img src="images/courses/d1.png" />Java</a>
                    </div>
                    <div class="course_list">
                        <a href="coursedata.php?topic=physics"><img src="images/courses/d1.png" />Physics</a>
                    </div>
                    <div class="course_list">
                        <a href="coursedata.php?topic=chemistry"><img src="images/courses/d1.png" />Chemistry</a>
                    </div>
                    <div class="course_list">
                        <a href="coursedata.php?topic=math"><img src="images/courses/d1.png" />Math</a>
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
                    <img src="images/extra/e3.jpg" alt="" class="myimg">
                </div>

                <div class="col-lg-6" style="margin-top:5rem">
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
                <?php
        include 'config.php';

        $sql = "SELECT * from user";

        if ($result = mysqli_query($conn, $sql)) {

            // Return the number of rows in result set
            $rowcount = mysqli_num_rows( $result );
            
            // Display result
            echo "<center>
            <div class='data'>$rowcount</div>
            <div class='course_list'>Enrolled Students</div>
        </center>";
        }
        ?>
                    
                </span>
                <span>
                <?php
        include 'config.php';

        $sql = "SELECT * from course";

        if ($result = mysqli_query($conn, $sql)) {

            // Return the number of rows in result set
            $rowcount = mysqli_num_rows( $result );
            
            // Display result
            echo "<center>
            <div class='data'>$rowcount</div>
            <div class='course_list'>Total Courses</div>
        </center>";
        }
        ?>
                    
                </span>
                <span>
                <?php
                        include 'config.php';

                        $sql = "SELECT * from category_course WHERE paid_or_free='Paid'";

                        if ($result = mysqli_query($conn, $sql)) {

                            // Return the number of rows in result set
                            $rowcount = mysqli_num_rows( $result );
                            
                            // Display result
                            echo "<center>
                            <div class='data'>$rowcount</div>
                            <div class='course_list'>Paid Student</div>
                        </center>";
                        }
                        ?>
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
                    <form action="contactus.php" method="POST">
                        <label>First Name <span class="imp">*</span></label><label style="margin-left: 130px">Last Name<span class="imp">*</span></label><br />

                            <input type="text" name="fname" style="margin-right: 10px; width: 175px"
                                required="required" /><input type="text" name="lname" style="width: 175px"
                                required="required" /><br />
                        
                        <label>Email <span class="imp">*</span></label><br />
                        <input type="email" name="email" style="width: 100%" required="required" /><br />
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
                <form action="feedbook.php" method="POST">
                    <label>Your Name</label><br />
                    <input type="text" name="name" class="fname" required="required" /><br />
                    <label>Email</label><br />
                    <input type="email" name="email" required="required" /><br />
                    <label>Additional Details</label><br />
                    <textarea name="addtional"></textarea><br />
                    <button type="submit" id="csubmit">Send Message</button>
                </form>
            </div>

        </div>

<?php include('footer.php') ?>