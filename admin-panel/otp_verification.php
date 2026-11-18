
<?php
include('./db_config.php');

$error_message = "";

if(isset($_POST['submit'])){

    try{
        if(empty($_POST['otp'])){
            throw new Exception("OTP Required !");
        }

        if(!isset($_SESSION['otp'])){
            throw new Exception("OTP Not Generated !");
        }

        if($_POST['otp'] != $_SESSION['otp']){
            throw new Exception("Invalid OTP !");
        }


        unset($_SESSION['otp']);
        $_SESSION['otp_verified'] = true;
        header("Location: ./resetPassword.php");
        exit();

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
    <title>Admin Panel | OTP Verification</title>

    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">

<div class="login-box">

    <div class="login-logo">
        <a href="#"><b>Admin</b>LTE</a>
    </div>

    <div class="card">
        <div class="card-body login-card-body">

            <p class="login-box-msg">
                Enter the OTP sent to your registered email address.
            </p>

            <?php if(!empty($error_message)){ ?>
                <div class="alert alert-danger">
                    <?php echo $error_message; ?>
                </div>
            <?php } ?>

            <form method="post">

                <div class="input-group mb-3">
                    <input type="text" name="otp" class="form-control" placeholder="Enter OTP">

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-key"></span>
                        </div>
                    </div>
                </div>

                <button type="submit" name="submit" class="btn btn-primary btn-block">
                    Verify OTP
                </button>

            </form>

        </div>
    </div>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
