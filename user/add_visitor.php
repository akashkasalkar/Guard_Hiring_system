
	<!-- Header Section -->
	<?php include_once('./header.php');?>
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-dark">
					<h2>Add New Visitor</h2>

				</div>
			</div>
		</div>
	</section>
	<!-- Page top Section end -->

	<!-- Contact Section -->
	<section class="contact-page-section spad overflow-hidden">
		<div class="container">
        <form action="" method="post" class="singup-form contact-form">
			
			<div class="row border p-3">
                <div class="col-6 ">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control"required >
                        </div>
                       
                      
                        <div class="form-group">
                            <label for="">Address</label>
                            <textarea name="address" id="" cols="30" class="form-control" rows="2" required></textarea>
                        </div>
                        <div class="from-group">
                            <label for="">Select Property</label>
                            <select name="p_id" id="" class="form-control" required>
                                <option value="#" disabled selected>Select Property</option>
                                <?php 
                                    $p_qry="select * from assign_property ap,property p 
                                    where ap.fk_property_id=p.id 
                                    and ap.fk_user_id='$user_id'
                                    group by (fk_property_id);";
                                    $p_exc=mysqli_query($con,$p_qry);
                                    while($p_row=mysqli_fetch_array($p_exc)){
                                        ?>
                                        <option value="<?php echo $p_row['fk_property_id'] ?>"><?php echo $p_row['p_name']."-".$p_row['address'] ?></option>
                                        <?php
                                    }
                                ?>
                            </select>
                        </div>
                      
                </div>
                <div class="col-6 ">
                      
                       
                        <div class="form-group">
                            <label for="">Mobile</label>
                            <input type="text" name="phone" class="form-control"required >
                        </div>
                      
                        <div class="form-group">
                            <label for="">Purpose of visit</label>
                            <textarea name="purpose" id="" cols="30" rows="2"  class="form-control"  required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Login Time</label>
                          
                            <input type="text" class="form-control" value="<?php echo date("Y-m-d H:i:s") ?>" max="$current_date" required name="login_time" reaonly>
                        </div>
                        <div class="form-group ">
                            <button class="btn btn-success form-control" name="save">Save</button>
                        </div>
                       
                </div>
               
		
			</div>
            </form>

		</div>
	</section>
    <?php 
        if(isset($_POST['save'])){
            $name=$_POST['name'];
            $phone=$_POST['phone'];
            $address=$_POST['address'];
            $purpose=$_POST['purpose'];
            $login_time=$_POST['login_time'];
            $p_id=$_POST['p_id'];




             $qry="INSERT INTO `visitors`( `fk_user_id`,`fk_property_id`, `phone`, `v_name`, `v_address`, `purpose_of_visit`, `login_time`) VALUES('$user_id','$p_id','$phone','$name','$address','$purpose','$login_time')";
            $exc=mysqli_query($con,$qry);
            if($exc){
                echo "<script>alert('Visitor Added')
                location='./visitors_details.php'</script>";
            }else{
                echo "err";
            }

        }
    ?>
	<!-- Trainers Section end -->


<?php include './footer.php' ?>