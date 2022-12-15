
<?php 
  include("connection.php");
  session_start();
  if(isset($_SESSION["CustomerEmails"])!=null)
  {
    header("location:index.php");
  }
  else
  {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Client Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Customer Login</h3>
                <form action="" method="POST">
                  <div class="form-group">
                    <label>email *</label>
                    <input type="text" name="txtname" class="form-control p_input"  style="color: white ;">
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input type="password" name="txtpass" class="form-control p_input"  style="color: white ;">
                  </div>
                  
                  <div class="text-center">
                    <button type="submit" name="btnlogin" class="btn btn-primary btn-block enter-btn">Login</button><br>
                    <a href="clientsignup.php">Create New Acount</a>
                  </div>
                  
                </form>
                <?php 
                    if(isset($_POST["btnlogin"]))
                    {
                      $name = $_POST["txtname"];
                      $password = $_POST["txtpass"];

                      $login = mysqli_query($con,"select * from customer where Email ='$name' AND Password='$password'");
                      $check = mysqli_num_rows($login);
                      $getid = mysqli_fetch_array($login);
                      if($check>0)
                      {
                        header("location:index.php");
                        $_SESSION["CustomerEmails"] = $getid[0];
                      }
                      else
                      {
                        echo "Login Failed";
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
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>
<?php } ?>