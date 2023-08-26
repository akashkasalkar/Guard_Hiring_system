


<?php include_once('./header.php');?>

 
<?php include_once('./sidebar.php');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-md-12 ">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Property Details</h3>
              </div>
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr class="text-center">
                  <th>S.No</th>
                  <th>Photo</th>
                  <th>Property Name</th>
                  <th>Property Address</th>
                  <th>Category</th>
                  <th>Owner Name</th>
                  <th>Owner Mobile</th>
             

                  <th>Action</th>
                
                </tr>
                </thead>
                <tbody>
                <?php 
                        $qry="select *,p.id as p_id,p.status as s_status from property p,category c where p.fk_cat_id=c.id ";
                        $exc=mysqli_query($con,$qry);
                        $i=1;
                        while($row=mysqli_fetch_array($exc)) {
                           
                        ?> 
                    <tr>
                    <td><?php echo $i ?></td>
                    <td>
                        <img src="<?php echo $row['p_photo'] ?>" alt="" width="150">  
                    </td>
                    <td><?php echo $row['p_name'] ?></td>
                    <td><?php echo $row['address'] ?></td>


                    <td><?php echo $row['cat_name'] ?></td>
                    <td><?php echo $row['owner_name'] ?></td>
                    <td><?php echo $row['owner_mobile'] ?></td>
               


                    <td> 
                    <a href="./view_all_property.php?property_id=<?php echo $row['p_id'] ?>" class="btn btn-dark">View / Assign To Guard </a>
                    <a href="./visitors_details.php?property_id=<?php echo $row['p_id'] ?>" class="btn btn-info">Visitors </a>
                      <a href="" class="btn btn-primary"><i class="fa fa-pen "></i></a>
                      <a href="" onClick="return confirm('Do you really want to delete?');" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                     
                          

                    
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
      

      </div><!-- /.container-fluid -->
     
    </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <?php include_once('./footer.php');?>

 