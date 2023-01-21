<?php include('navbar2.php') ?>
<style>
    img {
            width: 100px;
        }
        .cc {

 
        height: 42rem;

        }
</style>
<?php

include 'config.php';

session_start();

$view = $_SESSION['admin'];

if (!isset($view)) {
    echo "<script>location.href = 'login.php'</script>";
}

$id = $_GET['id'];
$datafetchquery = mysqli_query($conn, "SELECT * FROM `category_course` WHERE id = '$id'");
$data = mysqli_fetch_array($datafetchquery);
?>
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
                    <p style="font-size: 50px; margin-top:6rem; margin-bottom:3rem; color: black;">Update Category</p>
                </center>

                <div class="back-contact">
                    <div class="cc">
                        <form action="updatecategoryACtion.php" method="POST" enctype="multipart/form-data">

                            <label>Topic <span class="imp">*</span></label><br />
                            <select class="form-select" name="topic" aria-label="Default select example">
                                <option value="<?php echo $data['topic'] ?>"><?php echo $data['topic'] ?></option>
                                
                            </select>
                            <label>Name Of Course<span class="imp">*</span></label><br />
                            <input type="text" name="name_of_course" value="<?php echo $data['name_of_course'] ?>" style="width: 100%" id="name_of_course" required="required" /><br />
                            <label>Name Of Teacher<span class="imp">*</span></label><br />
                            <input type="text" name="name_of_teacher" value="<?php echo $data['name_of_teacher'] ?>" style="width: 100%" id="name_of_teacher" required="required" /><br />
                            <label>Pair/Free <span class="imp">*</span></label><br />
                            <select class="form-select" name="paid" aria-label="Default select example">
                                <option value="<?php echo $data['paid_or_free'] ?>"><?php echo $data['paid_or_free'] ?></option>
                            </select>
                            <label>Image <span class="imp">*</span></label><br />
                            <input type="file" id="fileupload" name="image" value="<?php echo $data['image'] ?>" style="width: 100%" id="image"><br />
                            
                            <input type="text" name="oldImage" value="<?php echo $data['image'] ?>" style="width: 100%" id="image"  hidden><br />
                            <div>
                                <img src="<?php echo $data['image'] ?>" id="upload-img" class="mb-3" alt="Image" width="100px">
                                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                            </div>
                            <button type="submit" id="csubmit">Update Category</button>
                        </form>
                    </div>
                </div>
</div>

<script src="js/jquery-latest.min.js"></script>
    <script>
        $(function() {
            $("#fileupload").change(function(event) {
                var x = URL.createObjectURL(event.target.files[0]);
                $("#upload-img").attr("src", x);
                console.log(event);
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">

           