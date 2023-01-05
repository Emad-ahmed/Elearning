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
      height: 20vh;
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
      <a class="get-started" href="login.php">Login</a>

    </nav>


    </div>
  </header>

  <div class="form_wrapper">
    <div class="form_container">
      <div class="title_container">
        <h2>Login Form</h2>
      </div>
      <div class="row">
        <div class="">
          <form action="loginAction.php" method="POST">
            <div class="input_field mb-4">
              <span><i class="fa fa-envelope"></i></span>
              <input type="email" name="email" id="email" placeholder="Email" required />
            </div>
            <div class="input_field mb-3">
              <span><i class="fa fa-lock"></i></span>
              <input type="password" id="password" name="password" placeholder="Password" required /> 
            </div>

            <input type="checkbox" onclick="myFunction()" class="me-2">Show Password
            <input class="button mt-2" type="submit" value="login" />
            <div>
              <a href="register.php">Create new account</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <script>
    function myFunction() {
      var x = document.getElementById("password"); 

      if (x.type === "password") {
        x.type = "text";

      } else {
        x.type = "password";
      }
    }
  </script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>