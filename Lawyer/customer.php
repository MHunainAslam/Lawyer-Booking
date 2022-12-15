
<?php 
  include("connection.php");

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
                            
                        </tr>
                        <?php 
                          $fetchsp= mysqli_query($con,"select * from Customer");
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