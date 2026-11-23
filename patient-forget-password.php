 <?php
 include ('frontend_header.php');
 if(isset($_SESSION['patientData'])) {
    header('location:patient-dashboard.php');
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './admin-panel/vendor/autoload.php';

$error_message = "";
$success_message = "";

if(isset($_POST['reset-btn'])){
    try{
        if(empty($_POST['patientEmail'])){
          throw new Exception("Email Required !");
        }

        if(!filter_var($_POST['patientEmail'], FILTER_VALIDATE_EMAIL)){
          throw new Exception("Please Enter Valid Email !");
        }
        
        $email = $_POST['patientEmail'];
        $query = "SELECT * FROM patients WHERE email = '$email' AND status = 'active'";
        $result = mysqli_query($conn,$query);
        $patientData = mysqli_fetch_array($result);
        $count = mysqli_num_rows($result);
        if($count == 1){
          if($result){
            $mail = new PHPMailer(true);
            $token = $patientData['token'];
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'janviijain008@gmail.com';
                $mail->Password = 'svsp fgdm bhuj zaaj';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;
                $mail->setFrom('janviijain008@gmail.com', 'Admin Panel');
                $mail->addAddress($email);
                $mail->Subject = 'Password Reset Link - Doctor Appointment';

                $mail->Body = '
                <html>
                <body style="font-family: Arial, sans-serif; background-color: #f4f6f9; padding: 20px;">
                    <div style="max-width: 550px; margin: auto; background-color: #ffffff;
                                padding: 30px; border-radius: 8px; text-align: center;">
                        <h2 style="color: #333;">Reset Your Password</h2>
                        <p style="color: #555; font-size: 15px;">Hello,</p>
                        <p style="color: #555; font-size: 15px;">
                            We received a request to reset your password for your
                            Doctor Appointment account.
                        </p>
                        <p style="color: #555; font-size: 15px;">
                            Click the button below to create a new password.
                        </p>
                        <a href="http://localhost:3000/patient-update-password.php?email='.urlencode($email).'&token='.$token.'"
                        style="display: inline-block; background-color: #007bff;
                                color: #ffffff; padding: 12px 30px;
                                text-decoration: none; border-radius: 5px;
                                font-weight: bold; margin: 15px 0;">
                            Reset Password
                        </a>
                        <p style="color: #777; font-size: 13px;">
                            If you did not request a password reset, please ignore this email.
                        </p>
                        <hr style="border: 0; border-top: 1px solid #eeeeee;">
                        <p style="color: #777; font-size: 13px;">
                            Thank you,<br>
                            Doctor Appointment Team
                        </p>
                    </div>

                </body>
                </html>
                ';

                $mail->isHTML(true);
                if($mail->send()){
                    $success_message  = "Password reset link has been sent successfully. Please check your email.";
                }else {
                    throw new Exception("Message could not be sent. Error: " . $mail->ErrorInfo);
                }
            } catch (Exception $e) {
                echo "Message could not be sent. Error: " . $mail->ErrorInfo;
            }
        }else {
            throw new Exception("Failed to register patient. Please try again.");
        }
        }else{
          throw new Exception("Invalid Email Address !");
        }

    }catch(Exception $e){
        $error_message = $e->getMessage();
    }
}
?>
<!-- PATIENT LOGIN -->
<section id="patient">
    <section class="page-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="./index.php" class="nav-link" data-page="home">Home</a>
                <span>›</span>
                Forget Password
            </div>

            <h1>Forget Password</h1>
            <p>
                Reset your password and regain access to your account.
            </p>

        </div>

    </section>
    <div class="container">
        <section class="login-section">
            <div class="container">
                <div class="login-card">
                    <div class="login-icon">
                        🙍‍♂️
                    </div>

                    <h2>Welcome</h2>
                    <p class="login-subtitle">
                        Reset your password
                    </p>
                    <?php if($error_message != '') { ?>
                    <div style="background:#fff1f0; color:#c0392b;
                                border:1px solid #f5c6c3; border-left:4px solid #dc3545;
                                padding:12px 15px; border-radius:6px;
                                font-size:15.5px; margin-bottom:15px;">

                        <i class="fas fa-exclamation-circle mr-2"></i>
                        <b><?php echo htmlspecialchars($error_message); ?></b>
                    </div>
                    <?php } ?>
                    <?php if($success_message != '') { ?>
                        <div style="background:#eaf7ef; color:#218838;
                                    border:1px solid #b9e2c8; border-left:4px solid #28a745;
                                    padding:12px 15px; border-radius:6px;
                                    font-size:15.5px; margin-bottom:15px;">

                            <i class="fas fa-check-circle mr-2"></i>
                            <b><?php echo htmlspecialchars($success_message); ?></b>    
                        </div>
                    <?php } ?>
                    <form id="patientLoginForm" method="post" novalidate>
                        <div class="input-group">
                            <label for="patientEmail" >
                                Email Address
                            </label>
                            <input type="email" id="patientEmail" name="patientEmail" placeholder="patient@email.com" required>
                        </div>
                        
                        <button type="submit" class="login-btn" name="reset-btn">
                            Reset Password
                        </button>
                    </form>

                    <div class="login-divider">
                        <span>
                            Patient Login
                        </span>
                    </div>
                    <a href="./patient-login.php">
                        <button class="patient-switch-btn " data-page="patient-login">
                            Patient Login →
                        </button>
                    </a>
                </div>
            </div>
        </section>
    </div>
</section>
<?php include ('frontend_footer.php'); ?>