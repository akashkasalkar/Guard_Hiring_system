


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
                <h3 class="card-title">View Category</h3>
              </div>
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Name</th>
                  <th>Action</th>
                
                </tr>
                </thead>
                <tbody>
                <?php 
                        $qry="select * from category ";
                        $exc=mysqli_query($con,$qry);
                        $i=1;
                        while($row=mysqli_fetch_array($exc)) {
                           
                        ?> 
                    <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['cat_name'] ?></td>
                    <td> 
                      <!-- <a href="" class="btn btn-primary">Edit</a> -->

                    <a href="./view_category.php?cat_id=<?php echo $row['id'] ?>" onClick="return confirm('Do you really want to delete?');" class="btn btn-danger">Delete</a>

                    </td>
                    </tr>      
                <?php
                     $i++;
                    } ?>  
                </tbody>
                
              </table>
            </div>
          
            </div>
            <!-- /.card -->

          </div>
                    
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    <?php 
      if(isset($_GET['cat_id'])){
        $cat_id=$_GET['cat_id'];
        $cat_qry="delete from category where id='$cat_id'";
        $cat_exc=mysqli_query($con,$cat_qry);
        if($cat_exc){
          echo "<script>alert('Deleted');location='./view_category.php'</script>";
        }
        else{
          echo "<script>alert('Cant delete, Category is Assigned to other property');location='./view_category.php'</script>";

        }
      }
    ?>

      </div><!-- /.container-fluid -->
     
    </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <?php include_once('./footer.php');?>

 