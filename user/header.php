<?php 
include '../dbconn.php';
  session_start();
  if(!isset($_SESSION['email'])){
    echo "<script>location='../index.php'</script>";
  }
  $email=$_SESSION['email'];
  $qry="select * from user where email='$email'";
  $exc=mysqli_query($con,$qry);
  while($row=mysqli_fetch_array($exc)){
    $user_id=$row['id'];
    $user_email=$row['email'];
    $status=$row['status'];
    $phone=$row['phone'];
    $name=$row['name'];
    $address=$row['address'];
    $status=$row['status'];



  }
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Online Security Gauard Hiring System |Guard Hiring</title>	
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/nice-select.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
  <header class="header-section">
    
    <div class="header-bottom">
      
      <a href="index.php" class="site-logo">
        <h4 style="color: white"><strong>OSGHS</strong></h4>
      </a>
    
      <div class="container">
        <ul class="main-menu">
        <li><a href="./index.php" class="text-dark " style="font-size: 20px;">Welcome <?php echo $name ?></a></li>
          <li><a href="./index.php" class="">Profile</a></li>
          <?php
            if($status=="" || $status=='Rejected'){
              ?>
          <li><a href="./apply_job.php">Apply for Job</a></li>

              <?php
            }
          ?>
          <li><a href="job_status.php">Job Status</a></li>
          <?php
            if( $status=='Approved'){
              ?>
          <li><a href="./shift_details.php">Shift Details</a></li>

          <li><a href="./visitors_details.php">Visitors Details</a></li>


              <?php
            }
          ?>

          <li><a href="./logout.php">Logout</a></li>
          
        </ul>
      </div>
    </div>
  </header>