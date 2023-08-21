


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
                    <th class="text-center">Owner Name</th>
                    <td><?php echo $row['owner_name'] ?></td>
                </tr>
                <tr>
                    <th class="text-center">Owner Phone</th>
                    <td><?php echo $row['owner_mobile'] ?></td>
                </tr>
                <?php 
                    if($row['p_status']!=NULL){

                        //assign proprty
                        ?>
                    <tr>

                    </tr>
                        <?php
                    }else{
                        ?>

                        <tr>
                            <td colspan="2">
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
                                        <button class="btn btn-primary form-control col-6">Assign Property</button>
                                    </div>
                                    
                                </form>
                            </td>
                        </tr>
<?php
                    }
                ?>
            
             
            </table>
            <?php } ?>
          </div>
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

 