<?php include('navbar2.php') ?>
<header id="header">
            <nav>
                <div>
                    <a href="index.php" class="elearn">E-Learning</a>
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


            <div class="diffSection" id="contactus">
                <center>
                    <p style="font-size: 50px; margin-top:6rem; margin-bottom:3rem; color: black;">Add Category</p>
                </center>

                <div class="back-contact">
                    <div class="cc">
                        <form action="CategoryAction.php" method="POST" enctype="multipart/form-data">

                            <label>Topic <span class="imp">*</span></label><br />
                            <select class="form-select" name="topic" aria-label="Default select example">
                                <option selected>Python</option>
                                <option value="C++">C++</option>
                                <option value="C">C</option>
                                <option value="Java">Java</option>
                            </select>
                            <label>Name Of Course<span class="imp">*</span></label><br />
                            <input type="text" name="name_of_course" style="width: 100%" id="name_of_course" required="required" /><br />
                            <label>Name Of Teacher<span class="imp">*</span></label><br />
                            <input type="text" name="name_of_teacher" style="width: 100%" id="name_of_teacher" required="required" /><br />
                            <label>Course Fee<span class="imp"></span></label><br />
                            <input type="number" name="course_amount" style="width: 100%" id="course_amount"  /><br />
                            <label>Pair/Free <span class="imp">*</span></label><br />
                            <select class="form-select" name="paid" aria-label="Default select example">
                                <option value="Paid">Paid</option>
                                <option value="Free">Free</option>
                            </select>
                            <label>Image <span class="imp">*</span></label><br />
                            <input type="file" name="image" style="width: 100%" id="image" required="required" /><br />
                            <button type="submit" id="csubmit">Add Category</button>
                        </form>
                    </div>
                </div>
</div>

           