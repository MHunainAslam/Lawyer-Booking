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
                  <h4 class="card-title">Add New Specilization</h4>
                  <form class="forms-sample" action="" method="POST">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" style="color: white;" name="txtsp" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>
                    <button type="submit" name="btnsave" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                  </form>
                  <?php
                    if(isset($_POST["btnsave"]))
                    {
                      $name = $_POST["txtsp"];
                      $query= mysqli_query($con,"insert into specialization (Name) values ('$name')");
                      if($query>0)
                      {
                        echo "Data Save";
                      }
                      else
                      {
                        echo "NotSave";
                      }
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
  </body>
</html>