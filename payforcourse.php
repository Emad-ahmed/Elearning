
<?php include('navbar2.php') ?>

<?php

include 'config.php';

$main_id = $_GET['id'];


$datafetchquery = mysqli_query($conn, "SELECT * FROM `category_course` WHERE id = '$main_id'");
$data = mysqli_fetch_array($datafetchquery);

$id = $data['id'];


?>
<link rel="stylesheet" href="css/pay.css">
<div class="container" style="margin-top:2rem">


<style>
  .myimgphoto
  {
    width:15rem;
    height:15rem;
  }
  img
  {
    width:100%;
  }

  .bkashbtn {
    margin-top: 1rem;
    background: #e63582;
    color: white;
    padding: 7px;
    padding-left: 3rem;
    padding-right: 3rem;
    margin-bottom: 1rem;
    text-decoration: none;
    border-radius: 10px;
  }
  .modal-dialog {
    background: #e63582;
  }
  .modal-content {
    background: #e63582;
  }

  .bkash-border {
    background-color: #e63582;
    width: 28rem;
    height: 28rem;
    margin: auto;
    text-align: center;
    border-radius: 10px 10px 10px 10px;
  }

  .sub-border {
    width: 26rem;
    position: absolute;
    margin-top: 4%;
    margin-left: 4%;
    height: 10rem;
    background-color: #e63582;
    box-shadow: 2px 2px 2px 2px;
    border-radius: 10px 10px 10px 0px;
  }

  .sub-border h6 {
    margin-top: 5%;
    margin-bottom: 8%;
    color: white;
  }

  .my_payment_img {
    position: absolute;
    width: 35rem;
    left: 29%;
    height: 7rem;
    object-fit: cover;
  }

  .bkash-form {
    margin-top: 8%;
  }

  .new-input {
    border-radius: 5px 5px 0px 5px;
    padding: 4px;
  }

  .label1 {
    font-size: 1.2rem;
    color: white;
  }

  .form-check-label {
    color: white;
  }

  .bbtn {
    background: #e6a8c1;
  }
  .proced
  {
    margin-left: 7.4rem;
  }
  .form-check-input
  {
    position: relative;
    left:5rem;
  }
  .phoneview
  {
    position: absolute;
    top:23.5rem;
    left:11rem;
  }
  .coursepay
  {
    margin-top:-20rem !important;
  }
</style>


<!-- Modal -->

<div
  class="modal fade"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalLabel">Bkash</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body mx-0">   
      
          <div class="bkash-border">
            <div class="sub-border">
              <h6 class="mt-35">Merchant: E-Learning</h4>
                <h6>Invoice no: 01721545404</h6>
              <h6 class="mt-2"></h4>
              <h6 class="mt-3 mb-5">Amount:500</h4>
              <?php
              echo "<form action='bkashAction.php?id=$id' class='bkash-form' method='POST' >
                <label for='phone'  class='mb-2 label1'>Your Bkash Account Number</label> <br>
                <input type='number'  id='phone' class='new-input' name='mobile' placeholder='+88'>
              
                <div class='mb-3 form-check mt-3'>
                  <input type='checkbox' class='form-check-input' id='exampleCheck1'>
                  <label class='form-check-label' for='exampleCheck1'>I agree the <a href='' class='text-white'>terms and condition</a></label>
                </div>
        
               <div class='text-center proced'>   
                  <button type='submit' class='btn bbtn'>PROCEED</button>
                  <button class='btn bbtn ms-3'>Close</button>
                  
                </div>
        
               
                    <p class='text-white phoneview'><i class='fa fa-phone' aria-hidden='true'></i> 16247</p>
                </div>
              </form>"
              ?>
            </div>
          </div>
        </div>
        </div>
      
    </div>
  </div>
</div>


</div>

</div>

<?php

  echo "<div class='row mt-5 ms-5 coursepay'>
      <div class='col-lg-4 border p-5'>
          <img src='$data[image]' alt='' class='myimgphoto mb-5'>
          <h6><span class='fw-bold mt-5'>Topic:</span> $data[topic]</h6>
          <p><span class='fw-bold mt-5'>Name Of Course:</span> $data[name_of_course]</p>
          <p><span class='fw-bold mt-5'>Name Of Teacher:</span> $data[name_of_teacher]</p>
          <p><span class='fw-bold mt-5'>Course Fee:</span> $data[course_amount]</p>
      </div>
      <div class='col-lg-3'>
      </div>
      <div class='col-lg-5 mt-5'>
      <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>
          Bkash Payment
      </button>
      </div>
  </div>"

  ?>
</div>
