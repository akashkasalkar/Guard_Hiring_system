


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
            <h3 class="card-title ">Visitor Details</h3>
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
            <table class="table table-bordered">
              
              <tr>
                <th colspan="5" class="text-center text-danger h3">Property Details</th>
              </tr>
              <tr >
                  <td rowspan="3" class="text-center">
                  <img src="<?php echo $row['p_photo'] ?>" class="img-fluid  text-center" alt="" width="100">

                  </td>                
              </tr>
              <tr>
                <th>Property Name</th>
                <td><?php echo $row['p_name'] ?></td>

                <th>Address</th>
                <td><?php echo $row['address'] ?></td>
              </tr>
              <tr>
                <th>Owner Name</th>
                <td><?php echo $row['owner_name'] ?></td>
              
                <th>Owner Phone</th>
                <td><?php echo $row['owner_mobile'] ?></td>

              </tr>

            </table>
            <?php } ?>
            <hr>
            <p class="text-center text-danger h1">Visitors</p>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>S.No</th>
                <th>Property Name | Address</th>
                <th>Visitor Name</th>
                <th>Visitor Phone</th>
                <th>Visitor Address</th>

                <th>Visit Purpose</th>
                <th>Visited Time</th>
                <th>Guard Name | Phone</th>
              </tr>
              </thead>
               <tbody>
                    <?php
                       $qry="select *,p.address as p_address,u.name as u_name,u.phone as u_phone  from visitors v,property p ,user u 
                     where v.fk_property_id='$property_id' 
                     and v.fk_property_id=p.id 
                     and v.fk_user_id=u.id
                     ";
                        $exc=mysqli_query($con,$qry);
                        $i=1;
                        while($row=mysqli_fetch_array($exc)){
                            ?>
                            <tr>
                            <td><?php echo $i ?></td>
                                <td>
                                    <?php echo $row['p_name']. " | ". $row['p_address'] ?>
                                </td>
                                <td><?php echo $row['v_name'] ?></td>
                                <td><?php echo $row['phone'] ?></td>
                                <td><?php echo $row['v_address'] ?></td>
                                <td><?php echo $row['purpose_of_visit'] ?></td>
                                <td><?php echo $row['login_time'] ?></td>
                                <td><?php echo $row['u_name']. " | ".$row['u_phone'] ?> </td>


                            </tr>
                            <?php
                        }
                    ?>
               </tbody>
            
             
            </table>
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

 