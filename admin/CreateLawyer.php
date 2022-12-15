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
                  <h4 class="card-title">Add New Lawyer</h4>
                  <form class="forms-sample" action="" method="POST" style="color: white;" enctype="multipart/form-data">
                    <div class="form-group" style="color: white;" >
                      <label for="exampleInputName1">Name</label>
                      <input type="text" style="color: white;" name="txtlawyer" class="form-control" id="exampleInputName1" placeholder="Name">
                      <label for="exampleInputName1">Email</label>
                      <input type="email" style="color: white;" name="txtEmail" class="form-control" id="exampleInputName1" placeholder="Email">
                      <label for="exampleInputName1">Password</label>
                      <input type="password" style="color: white;" name="txtPassword" class="form-control" id="exampleInputName1" placeholder="Password">
                      <label for="exampleInputName1">Gender</label>
                      <input type="text" style="color: white;" name="txtGender" class="form-control" id="exampleInputName1" placeholder="Gender">
                      <label for="exampleInputName1">Address</label>
                      <input type="text" style="color: white;" name="txtAddress" class="form-control" id="exampleInputName1" placeholder="Address">
                      <label for="exampleInputName1">Lawyer Image</label>
                      <input type="file" style="color: white;" accept="image/png,  image/jpeg" name="txtImage" class="form-control" id="exampleInputName1" placeholder="LawyerImage">
                      <label for="exampleInputName1">Contact</label>
                      <input type="text" style="color: white;" name="txtContact" class="form-control" id="exampleInputName1" placeholder="Contact">
                      <label for="exampleInputName1">Select Specialization</label>
                      <select class="form-control" style="color: white;" name="ddsp">
                                          <?php
                                            $sql_menu="select * from specialization";
                                            $result_menu = $con->query($sql_menu);
                                            if ($result_menu->num_rows > 0) {
                                            while($row_menu = $result_menu->fetch_array()) { ?>
                                         <option value="<?php echo $row_menu[0]; ?>"><?php echo $row_menu['Name']; ?></option>
                                        <?php } }?>
                        
                      </select>
                      <label for="exampleInputName1">Select Location</label>
                      <select class="form-control" style="color: white;" name="ddloc">
                                          <?php
                                            $sql_menu="select * from location";
                                            $result_menu = $con->query($sql_menu);
                                            if ($result_menu->num_rows > 0) {
                                            while($row_menu = $result_menu->fetch_array()) { ?>
                                         <option value="<?php echo $row_menu[0]; ?>"><?php echo $row_menu['Name']; ?></option>
                                        <?php } }?>
                        
                      </select>
                    </div>
                    <button type="submit" name="btnsave" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                  </form>
                  <?php
                    if(isset($_POST["btnsave"]))
                    {
                      $name = $_POST["txtlawyer"];
                      $email = $_POST["txtEmail"];
                      $password = $_POST["txtPassword"];
                      $gender = $_POST["txtGender"];
                      $address = $_POST["txtAddress"];
                      $imgname = $_FILES["txtImage"]["name"];
                      $temolocation = $_FILES["txtImage"]["tmp_name"];

                      move_uploaded_file($temolocation,"lawyerimages/".$imgname);


                      $contact = $_POST["txtContact"];
                      $spli = $_POST["ddsp"];
                      $locatiin = $_POST["ddloc"];
                      
                      $query = mysqli_query($con,"insert into Lawyer (Name,Email,Password,Gender,Address,Lawyerimage,Contact,location_id,specialization_id) values ('$name','$email','$password','$gender','$address','$imgname','$contact','$locatiin','$spli')");
                      
  
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