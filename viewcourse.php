<?php include('navbar2.php') ?>


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



    <body>
        <!-- Navigation Bar -->
        <header id="header">
            
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
                                <th>Name Of Course</th>
                                <th>Name Of Teacher</th>
                                <th>Image</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                        include 'config.php';

                        $alldata = mysqli_query($conn, "SELECT * FROM `category_course`");

                        while ($row = mysqli_fetch_array($alldata)) {
                            echo "<tr>
                            <td>$row[id]</td>
                            <td>$row[topic]</td>
                            <td>$row[name_of_course]</td>
                            <td>$row[name_of_teacher]</td>
                            <td><img src='$row[image]' alt=''></td>

                        
            
                  
                   
                    <td><a href='deletecourse.php? id=$row[id]' class='btn btn-danger'>Delete</a></td>
                    <td><a href='updatecourse.php? id=$row[id]' class='btn btn-info'>Edit</a></td>
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





          