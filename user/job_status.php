
	<!-- Header Section -->
	<?php include_once('./header.php');?>
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-dark">
					<h2> Job Status</h2>

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
                    <table class="table table-bordered">
                        <tr>
                            <th>Status</th>
                            <td><?php echo $status ?></td>
                        </tr>
                    </table>
				
				</div>
			</div>
		</div>
	</section>
	<!-- Trainers Section end -->


<?php include './footer.php' ?>