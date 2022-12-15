
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
                  <h4 class="card-title">List Specilization</h4>
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            
                        </tr>
                        <?php 
                          $fetchsp= mysqli_query($con,"select * from specialization");
                          while($row = mysqli_fetch_array($fetchsp))
                          {
                            echo '
                            <tr>
                            <td>'.$row[0].'</td>
                            <td>'.$row[1].'</td>
                          
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