


<?php include_once('./header.php');?>

 
<?php include_once('./sidebar.php');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        
        
        </div><!-- /.row -->
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8 offset-2">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Assign Property</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Employee Name</label>
                    <input type="text" class="form-control" id="name" name="cat_name" placeholder="Name" required="true">
                  </div>
                  <div class="form-group">
                    <label for="">Select Property</label>
                    <select name="property_id" id="" class="form-control">
                        <option value="#" selected disabled>Select Property</option>
                        <?php 
                             $qry="select * from property where status='NULL'";
                             $exc=mysqli_query($con,$qry);
                             while($row=mysqli_fetch_array($exc)){
                                ?>
                                <option value="<?php echo $row['id'] ?>"><?php echo $row['p_name'] ?></option>
                                <?php
                             }

                        ?>
                    </select>
                  </div>
                   <div class="card-footer">
                    <button type="submit" class="btn btn-primary" name="add">Add</button>
                  </div>
              </form>
   
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>


      </div><!-- /.container-fluid -->
     
    </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <?php include_once('./footer.php');?>

 