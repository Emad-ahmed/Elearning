<?php include('navbar2.php') ?>
<header id="header">
           

              
            <div class="diffSection" id="contactus" style="margin-top:10rem">
                
                <div>
                    <a href="category_course.php" class='btn btn-info ms-5'>Add Category</a>
                </div>
                <div class="back-contact">
                    
                    <div class="cc">
                    <h2 style="color: black;" class='text-center'>Add Course</h2>

                        <form action="addcourceAction.php" method="POST" enctype="multipart/form-data">

                            <label>Topic <span class="imp">*</span></label><br />
                            <select class="form-select" name="topic" aria-label="Default select example">
                            <?php
                                include 'config.php';
                                $alldata = mysqli_query($conn, "SELECT * FROM `category_course`");
                                while ($row = mysqli_fetch_array($alldata)) {
                                echo "<option value='$row[id]'>$row[name_of_course]-$row[name_of_teacher]</option>";
                                };
                            ?>
                            </select>
                            <label>Title <span class="imp">*</span></label><br />
                            <input type="text" name="title" style="width: 100%" id="title" required="required" /><br />
                            <label>Description</label><br />
                            <textarea name="description"></textarea><br />
                            <label>Video Link <span class="imp">*</span></label><br />
                            <input type="text" name="video_link" style="width: 100%" id="video_link"
                                required="required" /><br />
                            <button type="submit" id="csubmit">Add Course</button>
                        </form>
                    </div>
                </div>
</div>

           