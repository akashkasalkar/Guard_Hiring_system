


  <?php include_once('./header.php');?>

 
<?php include_once('./sidebar.php');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-4">
          <div class="card bg-dark border border-light">
            <div class="card-body">
              <p class="h1 p-5"> Category

              <?php 
                $qry="select count(*) as total_cat from category ";
                $exc=mysqli_query($con,$qry);
                while($row=mysqli_fetch_array($exc)){
                  $total_cat=$row['total_cat'];
                }
              ?>
              <span class="display-1 float-right"><?php echo $total_cat ?></span>
            </p>
            </div>
          </div>
          </div>
          <div class="col-4">
          <div class="card bg-light border border-dark">
            <div class="card-body">
              <p class="h1 p-5"> Guards
              <?php 
                 $qry="select count(*) as total_guard from user where status='Approved' ";
                $exc=mysqli_query($con,$qry);
                while($row=mysqli_fetch_array($exc)){
                  $total_guard=$row['total_guard'];
                }
              ?>
              <span class="display-1 float-right"><?php echo $total_guard ?></span>
            </p>
            </div>
          </div>
          </div>
          <div class="col-4">
          <div class="card bg-dark border border-light">
            <div class="card-body">
              <p class="h1 p-5"> Property
              <?php 
                 $qry="select count(*) as total_p from property ";
                $exc=mysqli_query($con,$qry);
                while($row=mysqli_fetch_array($exc)){
                  $total_p=$row['total_p'];
                }
              ?>
              <span class="display-1 float-right"><?php echo $total_p ?></span>
            </p>
            </div>
          </div>
          </div>
          
         
        </div>
      

      </div><!-- /.container-fluid -->
     
    </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <?php include_once('./footer.php');?>

 