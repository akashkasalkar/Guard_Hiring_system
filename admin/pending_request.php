


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
            <h3 class="card-title ">Pending Job Request</h3>
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
                <th>Action</th>
              </tr>
              </thead>
               <tbody>
                    <?php
                        $qry="select * from user where user_type='user' and status='Pending'";
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
                                <td>
                                    <a href="./pending_request.php?user_id=<?php echo $row['id'] ?>&status=Approved" class="btn btn-primary">Accept</a>
                                    <a href="./pending_request.php?user_id=<?php echo $row['id'] ?>&status=Rejected" class="btn btn-danger">Reject</a>

                                </td>

                            </tr>
                            <?php
                        }
                    ?>
               </tbody>
            
             
            </table>
                      <?php 
                      if(isset($_GET['user_id'])){
                          $user_id=$_GET['user_id'];
                          $status=$_GET['status'];

                          if($status=='Approved'){
                              $qry="update user set status='$status' where id='$user_id'";
                              $exc=mysqli_query($con,$qry);
                              if($exc){
                                echo "<script>alert('Approved')
                                  location='./allJobRequest.php'
                                </script>";
                              }
                          }
                          else if($status == 'Rejected'){
                            $qry="update user set status='$status' where id='$user_id'";
                              $exc=mysqli_query($con,$qry);
                              if($exc){
                                echo "<script>alert('Rejected')
                                  location='./allJobRequest.php'
                                </script>";
                              }
                          }

                        }
                      ?>
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

 