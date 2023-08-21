


<?php include_once('./header.php');?>

 
<?php include_once('./sidebar.php');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-12">
        
        <div class="card">
          <div class="card-header bg-primary">
            <h3 class="card-title ">View Job Request</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Status</th>
                <!-- <th>Action</th> -->
              </tr>
              </thead>
               <tbody>
                    <?php
                        $qry="select * from user where user_type='user'";
                        $exc=mysqli_query($con,$qry);
                        $i=1;
                        while($row=mysqli_fetch_array($exc)){
                            ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['phone'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['status'] ?></td>
                                <!-- <td><?php echo $row['address'] ?></td> -->

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

 