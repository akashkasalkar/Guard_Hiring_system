


<?php include_once('./header.php');?>

 
<?php include_once('./sidebar.php');?>
<?php 
    if(isset($_GET['property_id'])){
        $property_id=$_GET['property_id'];
    }
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-12">
        
        <div class="card">
          <div class="card-header bg-primary">
            <h3 class="card-title ">View/Assign Property </h3>
            <a href="./view_property.php" class="float-right btn btn-dark">View Property</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <?php
                $qry="select *,p.id as p_id,p.status as p_status from property p,category c 
                where p.fk_cat_id=c.id
                and p.id='$property_id' ";
                $exc=mysqli_query($con,$qry);
                while($row=mysqli_fetch_array($exc)) {
                           
            ?>
            <table id="example1" class="table table-bordered table-striped col-8 offset-2">
                <tr>
                    <th colspan="2" class="text-center">
                    <img src="<?php echo $row['p_photo'] ?>" class="img-fluid " alt="" width="150">

                    </th>
                </tr>
                <tr>
                    <th class="text-center">Property Name</th>
                    <td><?php echo $row['p_name'] ?></td>
                </tr>
                <tr>
                    <th class="text-center">Property Address</th>
                    <td><?php echo $row['address'] ?></td>
                </tr>
                <tr>
                    <th class="text-center">Property Category</th>
                    <td><?php echo $row['cat_name'] ?></td>
                </tr>
                <tr>
                    <th class="text-center">Owner Name</th>
                    <td><?php echo $row['owner_name'] ?></td>
                </tr>
                <tr>
                    <th class="text-center">Owner Phone</th>
                    <td><?php echo $row['owner_mobile'] ?></td>
                </tr>
            </table>
            <table class="table table-bordered table-striped col-8 offset-2">
               
                
                        <tr>
                            <th colspan="3" class="text-center text-danger">Guard Details</th>
                        </tr>
                    <tr>
                        <th class="text-center">Guard Name</th>
                        <th>Guard Mobile</th>
                        <th>Shift</th>
                    </tr>
                   
                    <tr>
                    <?php 
                        $shift_qry="select *,ap.id as apid from assign_property ap,property p, user u
                                    where ap.fk_property_id=p.id
                                    and ap.fk_user_id=u.id
                                    and ap.fk_property_id='$property_id'";
                        $shift_exc=mysqli_query($con,$shift_qry);
                        while($shift_row=mysqli_fetch_array($shift_exc)){
                            ?>
                        <td><?php echo $shift_row['name'] ?></td>
                        <td><?php echo $shift_row['phone'] ?></td>
                        <td><?php echo $shift_row['shift_details'] ?> <a href="./view_all_property.php?property_id=<?php echo $property_id ?>&shift_id=<?php echo  $shift_row['apid'] ?>" onClick="return confirm('Do you really want to delete?');"> <i class="fa fa-trash float-right mt-2 text-danger"></i></a></td>


                      
                    </tr>
                    <?php
                        }
                    ?>
                  
                        <?php
                   
                        ?>

                        <tr>
                            <td colspan="3">
                                <h3 class="text-center text-danger">Assign Property To Guard</h3>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <select name="emp_id" id="" class="form-control" required>
                                            <option value="#" disabled selected>Select Employee</option>
                                            <?php 
                                                $emp_qry="select * from user where status='Approved'";
                                                $emp_exc=mysqli_query($con,$emp_qry);
                                                while($emp_row=mysqli_fetch_array($emp_exc)){
                                                    ?>
                                                    <option value="<?php echo $emp_row['id'] ?>"><?php echo $emp_row['phone'].":".$emp_row['name'] ?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="shift" class="form-control" id="" required>
                                            <option value="#" disabled selected>Select Shift</option>
                                            <option value="Day">Day [7AM to 3PM]</option>
                                            <option value="AfterNoon">AfterNoon [3PM to 11PM]</option>
                                            <option value="Night">Night [11PM to 7AM]</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary form-control col-6" name="save">Assign Property</button>
                                    </div>
                                    
                                </form>
                            </td>
                        </tr>

            
             
            </table>
            <?php } ?>

            <?php 
                //delete shift code
                if(isset($_GET['shift_id']))   {
                    $shift_id=$_GET['shift_id'];
                    $dlt_shift_qry="delete from assign_property where id='$shift_id'";
                    $shift_exc=mysqli_query($con,$dlt_shift_qry);
                    if($shift_exc){
                        echo "<script>location='./view_all_property.php?property_id=$property_id '</script>";
                    }

                }
            ?>
          </div>
          <?php 
            if(isset($_POST['save'])){
                $p_id=$_GET['property_id'];
                $emp_id=$_POST['emp_id'];
                $shift=$_POST['shift'];

               echo $is_shift_added="select * from assign_property 
                where fk_property_id='$p_id' 
                and shift_details='$shift'
               ";
                $is_shift_exc=mysqli_query($con,$is_shift_added);
                $count=mysqli_num_rows($is_shift_exc);
                if($count){
                    echo "<script>alert('Please select other shift')
                location=location</script>";
                }
                else{
                    $qry="INSERT INTO `assign_property`(`fk_property_id`, `fk_user_id`, `shift_details`) VALUES('$p_id','$emp_id','$shift')";
                    $exc=mysqli_query($con,$qry);
    
                    $qry2="update property set status='Assigned' where id='$p_id'";
                    $exc2=mysqli_query($con,$qry2);
    
                    if($exc){
                        echo "<script>alert('Assigned')
                        location=location</script>";
                    }
                }


               


            }
          ?>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      

      </div><!-- /.container-fluid -->
     
    </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <?php include_once('./footer.php');?>

 