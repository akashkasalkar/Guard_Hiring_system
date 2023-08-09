
	<!-- Header Section -->
	<?php include_once('./header.php');?>
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-dark">
					<h2>Profile</h2>

				</div>
			</div>
		</div>
	</section>
	<!-- Page top Section end -->

	<!-- Contact Section -->
	<section class="contact-page-section spad overflow-hidden">
		<div class="container">
			
			<div class="row border p-3">
                <div class="col-8 offset-2">
                    <form action="" method="post" class="singup-form contact-form">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name ?>" required >
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" value="<?php echo $email ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Mobile</label>
                            <input type="text" name="phone" class="form-control" value="<?php echo $phone ?>" required >
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <textarea name="address" id="" cols="30" value="<?php echo $address ?>" class="form-control" rows="3" required><?php echo $address ?></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" name="update">Update</button>
                        </div>
                    </form>
                </div>
		
			</div>
		</div>
	</section>
    <?php 
        if(isset($_POST['update'])){
            $name=$_POST['name'];
            $phone=$_POST['phone'];
            $address=$_POST['address'];

            $qry="UPDATE `user` SET `name`='$name',`phone`='$phone',`address`='$address' where `id`='$user_id'";
            $exc=mysqli_query($con,$qry);
            if($exc){
                echo "<script>alert('Profile updated')
                location=location</script>";
            }else{
                echo "err";
            }

        }
    ?>
	<!-- Trainers Section end -->


<?php include './footer.php' ?>