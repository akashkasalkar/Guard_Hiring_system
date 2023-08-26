
	<!-- Header Section -->
	<?php include_once('./header.php');?>
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-dark">
					<h2> Visitors Details</h2>

				</div>
			</div>
		</div>
	</section>
	<!-- Page top Section end -->

	<!-- Contact Section -->
	<section class="contact-page-section spad overflow-hidden">
		<div class="container">
			
			<div class="row">
    

        
				<div class="col-lg-12">
                    <a href="./add_visitor.php" class="float-right btn btn-dark">Add Visitor</a>
                    <table class="table table-bordered">
                        <tr class="text-center">
                            <th>Sl No</th>
                            <th>Property Name| Address</th>
                            <th>Visitor Name</th>
                            <th>Visitor Phone</th>
                            <th>Visitor Address</th>
                            <th>Purpose of visit</th>
                            <th>Login Time</th>
                            <!-- <th>Logout Time</th> -->
                            <!-- <th>Action</th> -->
                        </tr>
                        <?php
                            $i=1;
                            $qry="select *,p.address as p_address from visitors v,property p where fk_user_id='$user_id'
                            and v.fk_property_id=p.id";
                            $exc=mysqli_query($con,$qry);
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
                                <!-- <td><a href="" class="btn btn-danger">Delete</a></td> -->

                            </tr>
                                <?php
                                $i++;
                            }
                        ?>
                      
                    </table>
				</div>
       
                
			</div>
		</div>
	</section>
	<!-- Trainers Section end -->


<?php include './footer.php' ?>