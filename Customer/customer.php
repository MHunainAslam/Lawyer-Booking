
<?php 
  include("connection.php");
  
  if(isset($_SESSION["CustomerEmails"])==null)
  {
    header("location:clientlogin.php");
  }
  else
  {

?>
<!DOCTYPE html>
<html lang="en">
  <head>

  </head>
  <body>
    <div class="container-scroller">
        <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">List Customer</h4>
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Gender</th>
                            <th>Cell Number</th>
                            <th>Action</th>
                        </tr>
                        <?php 
                          $getCustomerEMails = $_SESSION["CustomerEmails"];
                          $fetchsp= mysqli_query($con,"select * from Customer where C_id ='$getCustomerEMails'");
                          while($row = mysqli_fetch_array($fetchsp))
                          {
                            echo '
                            <tr>
                            <td>'.$row[0].'</td>
                            <td>'.$row[1].'</td>
                            <td>'.$row[2].'</td>
                            <td>'.$row[3].'</td>
                            <td>'.$row[4].'</td>
                            <td>'.$row[5].'</td>
                            
                            
                            <td>
                                <a href="index.php?cid='.$row[0].'" class="btn btn-info">Edit</a> 
                         
                            </td>
                        </tr>
                            ';
                          }
                       ?>
                        
                    </table>

                </div>
              </div>
            </div>
          </div>
  </body>
</html>
<?php } ?>