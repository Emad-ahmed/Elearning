<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="style.css" />

    <link rel="stylesheet" href="css/reg.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/card.css">
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
    <title>Home</title>

    <style>
        header {
            height: 10vh;
            /* background: #000; */
        }
    </style>
</head>

<body>
    <header id="header">
        <nav>
            <div class="logo">
                <a href="index.php" class="elearn">E-Learning</a>
            </div>


            </div>
            <?php
            if (isset($_SESSION['email'])) {
                echo '<a class="get-started" href="logout.php">Logout</a>';
            } else {
                echo '<a class="get-started" href="login.php">Login</a>';
            }

            ?>

        </nav>

        </div>
    </header>

    <div class="container coursecard mb-5">
        <h1 class="text-center fw-bold mt-5 mb-5">Computer Course</h1>
        <div class="row">
            <div class="col-lg-4">
                <div class="card text-center" style="width: 18rem;">
                    <iframe width="285px" height="215" src="https://www.youtube.com/embed/K3F580_nxqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="card-body">
                        <h4 class="card-title">Basic Computer Course For Beginners in Bangla Tutorial 2020</h4>
                        <p class="card-text">Basic Computer Full Course | Part-1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card me-4 text-center" style="width: 18rem;">
                    <iframe width="285px" height="215" src="https://www.youtube.com/embed/DW_OC_CTKaA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="card-body">
                        <h4 class="card-title">Basic computer course For Beginners in Bangla tutorial 2021</h4>
                        <p class="card-text">Basic Computer Full Course | Part-2</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-center" style="width: 18rem;">
                    <iframe width="285px" height="215" src="https://www.youtube.com/embed/ylkjCKJohoM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="card-body">
                        <h4 class="card-title">Basic computer course For Beginners in Bangla tutorial 2021</h4>
                        <p class="card-text">Basic Computer Full Course | Part-3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <p>Copyright &copy; 2022 <img src="images/icon/favicon.png" alt="logo"> All Rights Reserved.</p>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>