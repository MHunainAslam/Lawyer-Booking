
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
                  <h4 class="card-title">List Book Oppointment</h4>
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Cell Number</th>
                            <th>Address</th>
                            <th>Lawyer ID</th>
                            <th>Customer ID</th>
                       
                            
                     
                            
                        </tr>
                        
                        <?php 
                          $getCustomerEMails = $_SESSION["CustomerEmails"];
                          $fetchsp= mysqli_query($con,"select * from book_oppointment where CUSTOMERID ='$getCustomerEMails'");
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
                            <td>'.$row[6].'</td>
                            
                            
                           
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