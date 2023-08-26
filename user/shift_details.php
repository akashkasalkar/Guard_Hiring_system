
	<!-- Header Section -->
	<?php include_once('./header.php');?>
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-dark">
					<h2> Shift Details</h2>

				</div>
			</div>
		</div>
	</section>
	<!-- Page top Section end -->

	<!-- Contact Section -->
	<section class="contact-page-section spad overflow-hidden">
		<div class="container">
			
			<div class="row">
    <?php 
        $qry="select *,p.address as p_address from assign_property ap,property p,user u,category c
               where ap.fk_property_id=p.id
               and ap.fk_user_id=u.id
               and p.fk_cat_id=c.id
               and ap.fk_user_id='$user_id' ";
            $exc=mysqli_query($con,$qry);
            while($row=mysqli_fetch_array($exc)){
                ?>

        
				<div class="col-lg-6 ">
                    <table class="table table-bordered">
                        <tr>
                            <th>Property Type</th>
                            <td><?php echo $row['p_name'] ?></td>
                        </tr>
                        <tr>
                            <th>Property Address</th>
                            <td><?php echo $row['p_address'] ?></td>
                           
                        </tr>
                        <tr>
                            <th>Owner Name</th>
                            <td><?php echo $row['owner_name'] ?></td>
                            
                        </tr>
                        <tr>
                            <th>Owner Mobile</th>
                            <td><?php echo $row['owner_mobile'] ?></td>


                        </tr>
                        <tr>
                            <th>Shift</th>
                            <?php 
                                if($row['shift_details']=="Day"){
                                    ?>
                            <td><?php echo $row['shift_details'] ?> 7AM-3PM</td>

                                    <?php
                                }else if($row['shift_details']=="AfterNoon"){
                                    ?>
                            <td><?php echo $row['shift_details'] ?> 7PM-11PM</td>

                                    <?php
                                }else if($row['shift_details']=="Night"){
                                
                                    ?>
                            <td><?php echo $row['shift_details'] ?> 11PM-7AM</td>

                                    <?php
                                }
                            ?>

                        </tr>
                        
                    </table>
				
				</div>
                <?php
            }
    ?>
                
			</div>
		</div>
	</section>
	<!-- Trainers Section end -->


<?php include './footer.php' ?>