<?php
include('./db_config.php');

if(!isset($_SESSION['otp_verified']) || !isset($_SESSION['adminEmail'])){
    header("Location: adminForgot.php");
    exit();
}

$email = $_SESSION['adminEmail'];
$error_message = "";
$success_message = "";

if(isset($_POST['submit'])){
    try{

        if(empty($_POST['newPassword'])){
            throw new Exception("New Password Required !");
        }

        if(empty($_POST['cPassword'])){
            throw new Exception("Confirm Password Required !");
        }

        $newPassword = $_POST['newPassword'];
        $cPassword = $_POST['cPassword'];

        if($newPassword != $cPassword){
            throw new Exception("New Password and Confirm Password Not Matched !");
        }

        if(strlen($newPassword) < 6){
            throw new Exception("Password Must be 6 Characters Long !");
        }

        // Email from OTP verification session
        $newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);
        $query = "UPDATE admin SET password = '$newPasswordHash' WHERE email = '$email' AND role = 'admin'";
        $result = mysqli_query($conn, $query);
        if($result && mysqli_affected_rows($conn) > 0){
            unset($_SESSION['admindata']);
            unset($_SESSION['otp_verified']);
            unset($_SESSION['adminEmail']);
            $success_message = "Password Updated Successfully!";

            header("Location: ./adminLogin.php");
            exit();

        }else{
            throw new Exception("Something went wrong. Please try again !");
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
  <title>AdminLTE 3 | Recover Password</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="./index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>
        <?php
          if(!empty($error_message)){
        ?>
        <div class="alert alert-danger">
            <?php echo $error_message; ?>
        </div>
        <?php
          } 
        ?>
        <?php
          if(!empty($success_message)){
        ?>
        <div class="alert alert-success">
            <?php echo $success_message; ?>
        </div>
        <?php
          } 
        ?>
      <form method="post">
        <div class="input-group mb-3">
          <input type="password" name = "newPassword" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="cPassword" class="form-control" placeholder="Confirm Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Change password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="./adminLogin.php">Login</a>
      </p>
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
