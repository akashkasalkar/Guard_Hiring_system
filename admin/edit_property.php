


<?php include_once('./header.php');?>

 
<?php include_once('./sidebar.php');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Property</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  
                    <div class="form-group">
                        <label for="exampleInputEmail1">Property Name</label>
                        <input type="text" class="form-control" id="name" name="p_name" placeholder="" required="true">
                    </div>
                  
                    <div class="form-group">
                        <label for="">Property Address</label>
                        <textarea name="p_address" id="" cols="30" rows="4" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Property Category</label>
                        <select name="cat_id" id="" class="form-control" required>
                            <option value="#" selected disabled>Select Category</option>
                            <?php
                                $qry="select * from category";
                                $exc=mysqli_query($con,$qry);
                                while($row=mysqli_fetch_array($exc)){
                                    ?>
                                    <option value="<?php echo $row['id'] ?>"><?php echo $row['cat_name'] ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Owner Name</label>
                        <input type="text" class="form-control" id="name" name="o_name" placeholder="Name" required="true">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Owner Mobile Number</label>
                        <input type="text" class="form-control" id="mobilenumber" name="o_number" placeholder="Mobile Number" maxlength="10" pattern="[0-9]+" required>
                    </div> 
                    
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Photo</label>
                        <input type="file" class="" id="name" name="p_photo" placeholder="" required="true">
                    </div>               
              
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="add">Add</button>
                </div>
              </form>
                                 <?php
                                    if(isset($_POST['add'])){
                                        $p_name=$_POST['p_name'];
                                        $p_address=$_POST['p_address'];
                                        $o_name=$_POST['o_name'];
                                        $p_phone=$_POST['o_number'];
                                        $cat_id=$_POST['cat_id'];
                                        $photo=$_FILES['p_photo'];
                                        $p_file_name=$_FILES["p_photo"]["name"];
                                        $tm=md5(time());
                                        $dst_file_path="./resources/photo";

                                        if(!is_dir($dst_file_path)){
                                            mkdir($dst_file_path,0777, true);
                                        }
                                    
                                        $dst=$dst_file_path."/".$tm.$p_file_name;
                                        $file_status=move_uploaded_file($_FILES["p_photo"]["tmp_name"],$dst);
                                        $qry="INSERT INTO `property`(`fk_cat_id`,`p_name`, `p_photo`, `address`, `owner_name`, `owner_mobile`) VALUES ('$cat_id','$p_name','$dst','$p_address','$o_name','$p_phone')";
                                        if(mysqli_query($con,$qry)){
                                            echo "<script>
                                                window.location='view_property.php';
                                            </script>";
                                        }
                                            else{
                                                echo "<script>alert('Error')</script>";
                                            }
                                        }
                                ?>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
        </div>
      

      </div><!-- /.container-fluid -->
     
    </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <?php include_once('./footer.php');?>

 