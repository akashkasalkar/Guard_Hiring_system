<?php include "../dbconn.php"; ?>
<!DOCTYPE html>
<html>
<head>
 
  <title>Online Security Gauard Hiring System | Log in</title>
 

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="login.php"><b>Admin</b> | OSGHS</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <!-- <p class="login-box-msg">Sign in to start your session</p> -->

      <form action="" method="post" id="login">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="email@gmail.com" required="true" name="email" value="" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required="true" value="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
     
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <?php 
                session_start();
                if(isset($_POST['login'])){
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                    $qry="select * from user 
                    where email='$email'
                    and password= '$password'
                    and user_type='Admin' ";
                    $exc=mysqli_query($con,$qry);
                    $count=mysqli_affected_rows($con);
                    if($count == 1){
                        $_SESSION['email']=$email;
                        echo "<script>
                        location='./dashboard.php'</script>";
                    }
                    else{
                        echo "<script>alert('Email/Password wrong.')
                        location='./index.php'</script>";
                    }
                }
            ?>

     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
