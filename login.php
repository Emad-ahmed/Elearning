<?php include('navbar2.php') ?>

  <style>
    .form_wrapper
    {
      margin-top: 8rem;
    }
  </style>
 

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