
<?php 
  include("connection.php");
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Client Sign up</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">
  </head>
  <body >
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Client Registeration</h3>
                <form action="" method="POST">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" onkeypress="return /[a-z]/i.test(event.key)" name="txtname" class="form-control p_input" style="color: white ;"  required>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control p_input" style="color: white ;"  required>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control p_input" style="color: white ;"  required>
                  </div>
                  <div class="form-group">
                    <label>Gender</label>
                    <select type="text" name="gender" class="form-control p_input" style="color: white ;"  required>
                    
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Contact</label>
                    <input type="text"  pattern="[0-9]{11}" name="contact" class="form-control p_input" style="color: white ;" required>
                  </div>
                  
                  <div class="text-center">
                    <button type="submit" name="create" class="btn btn-primary btn-block enter-btn">Sign Up</button>
                  </div>
                  
                  <p class="sign-up text-center">Already have an Account?<a href="./clientlogin.php"> Sign in</a></p>
                  
                </form>
                <?php
                    if(isset($_POST["create"]))
                    {
                      $name = $_POST["txtname"];
                      $email = $_POST["email"];
                      $password = $_POST["password"];
                      $gender = $_POST["gender"];
                      $contact = $_POST["contact"];

                      $query = mysqli_query($con,"insert into customer (Name,Email,password	,gender,cellnumber) values ('$name','$email','$password','$gender','$contact')");
                      
  
                      if($query>0)
                      {
                        header("location:clientlogin.php");
                      }
                      else
                      {
                        echo "Failed";
                      }
                    }
                  ?>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="./assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="./assets/js/off-canvas.js"></script>
    <script src="./assets/js/hoverable-collapse.js"></script>
    <script src="./assets/js/misc.js"></script>
    <script src="./assets/js/settings.js"></script>
    <script src="./assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>