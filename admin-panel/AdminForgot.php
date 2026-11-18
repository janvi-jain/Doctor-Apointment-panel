<?php include('./db_config.php');
  $error_message = "";
  // $success_message = "";
  if(isset($_POST['submit'])){
    try{
      if(empty($_POST['adminEmail'])){
        throw new Exception("Email Required !");
      }
      if(!filter_var($_POST['adminEmail'], FILTER_VALIDATE_EMAIL)){
        throw new Exception("Please Enter Valid Email !");
      }
      $email = $_POST['adminEmail'];
      $query = "SELECT * FROM admin WHERE email = '$email' AND role = 'admin'";
      $result = mysqli_query($conn,$query);
      $count = mysqli_num_rows($result);
      if($count == 1){
        $_SESSION['adminEmail'] = $email;
        header("Location: ./mail_config.php");
      }else{
        throw new Exception("Invalid Email Address !");
      }
    }catch(Exception $e){
      $error_message = $e->getMessage();
    }
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin panel| Forgot Password</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="./adminDashboard.php"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
      <?php
        if(!empty($error_message)){ 
      ?>
      <div class="alert alert-danger">
      <?php echo $error_message; ?>
      </div>
      <?php
    } 
    ?>
      <form method="post">
        <div class="input-group mb-3">
          <input type="email" name="adminEmail" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Request new password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="./adminLogin.php">Login</a>
      </p>
      <!-- <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
