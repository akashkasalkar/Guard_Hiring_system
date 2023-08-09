
	<!-- Header Section -->
	<?php include_once('./header.php');?>
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-dark">
					<h2>Apply Job</h2>

				</div>
			</div>
		</div>
	</section>
	<!-- Page top Section end -->

	<!-- Contact Section -->
	<section class="contact-page-section spad overflow-hidden">
		<div class="container">
			
			<div class="row">
		
				<div class="col-lg-8 offset-2">
					<form class="" method="post">

						<div class="form-group">
							<button class="btn btn-dark form-control btn-lg" name="submit">Click here to send your job application !!</button>
						</div>
						<!-- <div class="row">
							<div class="col-md-12">
								<label style="padding-bottom: 10px;">First Name</label>
								<input type="text" placeholder="First Name" name="fname"  class="form-control" required="true">
							</div>
							<div class="col-md-12">
								<label style="padding-bottom: 10px;">Last Name</label>
								<input type="text" placeholder="Last Name" name="lname" class="form-control" required="true">
							</div>
							<div class="col-md-12">
								<label style="padding-bottom: 10px;">Your Email</label>
								<input type="text" placeholder="Your Email" name="email" class="form-control" required="true">
							</div>
							<div class="col-md-12">
								<label style="padding-bottom: 10px;">Phone Number</label>
								<input type="text" placeholder="Phone Number" class="form-control" name="mobnum" required="true" maxlength="10" pattern="[0-9]+">
							</div>
							<div class="col-md-12">
								<label style="padding-bottom: 10px;">Requirement Number<small style="color:red;">(Number of Guards)</small></label>
								<input type="text" placeholder="Requirement Number" name="reqnum" class="form-control" required="true">
							</div>
							<div class="col-md-12">
								<label style="padding-bottom: 10px;">Shift Requirement</label>
							
								<select name="shift" required="true" class="form-control">
									<option value="">Choose Shift</option>
									<option value="Day">Day</option>
									<option value="Night">Night</option>
									<option value="24hrs">24hrs</option>
								</select>
							</div>
							<div class="col-md-12">
								<label style="padding-top: 10px;">Gender</label>
								<select name="gender" required="true" class="form-control">
									<option value="">Choose Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
							<br>
							<div class="col-md-12">
								<label style="padding-top: 10px;">Address</label>
								<textarea placeholder="Enter Address" name="add" required="true"></textarea>
								 <input type="submit" class="btn btn-primary" value="send" name="submit">
							</div>
						</div> -->
					</form>
					<?php 
						if(isset($_POST['submit'])){
							$status='Pending';
							$qry="update user set status='$status' where id='$user_id'";
							$exc=mysqli_query($con,$qry);
							if($exc){
								echo "<script>alert('Job application sent to Admin. ')
								location='./job_status.php'</script>";
							}
						}
					?>
				</div>
			</div>
		</div>
	</section>
	<!-- Trainers Section end -->


<?php include './footer.php' ?>