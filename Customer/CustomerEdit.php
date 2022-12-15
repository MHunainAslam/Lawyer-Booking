<?php 
  include("connection.php");
    if(isset($_GET['cid']))
    {
        $getid = $_GET["cid"];
        $select = mysqli_query($con,"select * from customer where C_Id");
        $row = mysqli_fetch_array($select);
    
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
                  <h4 class="card-title">Edit Customer</h4>
                  <form class="forms-sample" action="" method="POST" style="color: white;" enctype="multipart/form-data">
                    <div class="form-group" style="color: white;" >
                      <label for="exampleInputName1">Name</label>
                      <input type="text" style="color: white;" value="<?php  echo $row[1]?>" name="txtlawyer" class="form-control" id="exampleInputName1" placeholder="Name">
                      <label for="exampleInputName1">Email</label>
                      <input type="email" style="color: white;" value="<?php  echo $row[2]?>" name="txtEmail" class="form-control" id="exampleInputName1" placeholder="Email">
                      <label for="exampleInputName1">Password</label>
                      <input type="password" style="color: white;" value="<?php  echo $row[3]?>" name="txtPassword" class="form-control" id="exampleInputName1" placeholder="Password">
                      <label for="exampleInputName1">Gender</label>
                      <input type="text" style="color: white;" value="<?php  echo $row[4]?>" name="txtGender" class="form-control" id="exampleInputName1" placeholder="Gender">
                      <label for="exampleInputName1">Contact</label>
                      <input type="text" style="color: white;" value="<?php  echo $row[5]?>" name="txtContact" class="form-control" id="exampleInputName1" placeholder="Address">
                     
                   
                    </div>
                    <button type="submit" name="btnsave" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                  </form>
                  <?php
                    if(isset($_POST["btnsave"]))
                    {
                        $getid = $_GET["cid"];
                      $name = $_POST["txtlawyer"];
                      $email = $_POST["txtEmail"];
                      $password = $_POST["txtPassword"];
                      $gender = $_POST["txtGender"];
                      $contact = $_POST["txtContact"];
                  
                      
                      $query = mysqli_query($con,"update customer set Name='$name' ,Email='$email',password='$password',gender='$gender',cellnumber='$contact' where C_Id='$getid'");
                      
  
                      if($query>0)
                      {
                        echo "Data Update";
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
<?php } ?>