


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
                <h3 class="card-title">Add Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="name" name="cat_name" placeholder="Name" required="true">
                  </div>
                   <div class="card-footer">
                    <button type="submit" class="btn btn-primary" name="add">Add</button>
                  </div>
              </form>
              <?php
                  if(isset($_POST['add'])){
                      $cat_name=$_POST['cat_name'];
                      $qry="INSERT INTO `category`( `cat_name`) VALUES ('$cat_name')";
                      if(mysqli_query($con,$qry)){
                        echo "<script>alert('Data Added')
                            window.location='view_category.php'
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

 