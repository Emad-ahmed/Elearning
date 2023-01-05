<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="css/reg.css" />
  <link rel="stylesheet" href="style.css" />
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
  <title>Registration</title>

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

  <div class="form_wrapper mt-5">
    <div class="form_container">
      <div class="title_container">
        <h2>Registration Form</h2>
      </div>
      <div class="row clearfix">
        <div>
          <form action="registerAction.php" method="POST" onsubmit="return formValidation()">

            <div class="input_field mb-0">
              <span><i class="fa fa-user"></i></span>
              <input type="text" name="name" id="name" placeholder="Full Name" required />

              <p class="mt-0 errorp" id="ferror"></p>

            </div>


            <div class="input_field mb-0">
              <span><i class="fa fa-envelope"></i></span>
              <input type="text" name="email" id="email" placeholder="Email" required />
              <p class="mt-0 errorp" id="eerror"></p>
            </div>

            <div class="input_field mb-0">
              <span><i class="fa fa-lock"></i></span>
              <input type="password" id="password" name="password" placeholder="Password" required />
              <p class="mt-0 errorp" id="perror"></p>
            </div>

            <div class="input_field mb-0">
              <span><i class="fa fa-lock"></i></span>
              <input type="password" id="cpassword" name="cpassword" placeholder="Re-type Password" required />
              <p class="mt-0 errorp" id="cperror"></p>
            </div>
            <input type="checkbox" onclick="myFunction()" class="me-2">Show Password
            <input class="button" type="submit" class="mt-3" value="Register" />
            <a href="login.php">Already Have an account?</a>
          </form>
        </div>
      </div>
    </div>
  </div>




  <!-- Optional JavaScript; choose one of the two! -->
  <script src="validation.js"></script>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script>
    function myFunction() {
      var x = document.getElementById("password");
      var y = document.getElementById("cpassword");
      if (x.type === "password" || y.type === "password") {
        x.type = "text";
        y.type = "text";

      } else {
        x.type = "password";
        y.type = "password";
      }
    }
  </script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>