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
        <link rel="stylesheet" href="style.css" />

        <link rel="stylesheet" href="css/reg.css" />
        <link rel="stylesheet" href="css/footer.css" />
        <script type="text/javascript" src="script.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

        <link rel="stylesheet" href="style.css" />

        <link rel="stylesheet" href="css/reg.css" />
        <link rel="stylesheet" href="css/footer.css" />
        <script type="text/javascript" src="script.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
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



            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
                crossorigin="anonymous">
            </script>

    </body>

</html>