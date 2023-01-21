

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

