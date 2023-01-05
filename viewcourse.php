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

        img {
            width: 50px;
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


            <div class="container" style="margin-top: 7rem">
                <h1 class="text-center mb-3 mt-4">View Course</h1>
                <div style="overflow-x:auto;">
                    <input class="form-control mb-3" type="text" name="" id="myInput" placeholder="Course Name"
                        onkeyup="searchFun()" />
                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>Topic</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Video Link</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                        include 'config.php';

                        $alldata = mysqli_query($conn, "SELECT * FROM `course`");

                        while ($row = mysqli_fetch_array($alldata)) {
                            echo "<tr>
                    <td>$row[id]</td>
                    <td>$row[topic]</td>
                    <td>$row[title]</td>
                    <td>$row[description]</td>
                    <td><img src='$row[image]' alt=''></td>
                    <td>$row[video_link]</td>
                 
            
                  
                   
                    <td><a href='delettaecher.php? id=$row[id]' class='btn btn-danger'>Delete</a></td>
                    <td><a href='updateteacher.php? id=$row[id]' class='btn btn-info'>Edit</a></td>
                    </tr>";
                        }

                        ?>
                        </tbody>
                    </table>
                </div>



                <script>
                const searchFun = () => {
                    let filter = document.getElementById("myInput").value.toUpperCase();

                    let myTable = document.getElementById("myTable");
                    let tr = myTable.getElementsByTagName("tr");

                    for (var i = 0; i < tr.length; i++) {
                        let td = tr[i].getElementsByTagName("td")[1];

                        if (td) {
                            let textvalue = td.textContent || td.innerHTML;
                            if (textvalue.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }
                    }
                };
                </script>
            </div>
            </div>





            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"></script>

    </body>

</html>