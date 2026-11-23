
<?php
include ('frontend_header.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './admin-panel/vendor/autoload.php';
$error_message = "";
$success_message = "";

if(isset($_POST['submit'])){
    try{
        // print_r($_POST);
        $name = $_POST['name']?$_POST['name']:'';
        $email = $_POST['email']?$_POST['email']:'';
        $password = $_POST['password']?$_POST['password']:'';
        $cpassword = $_POST['cpassword']?$_POST['cpassword']:'';
        $agree_terms = $_POST['agree_terms']??'';  
        //Null Coalescing Operator

        if($name == ''){
            throw new Exception("Name is required");
        }
        if($email == ''){
            throw new Exception("Email is required");
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("Please enter a valid email");
        }
        $existsemail = "SELECT * FROM patients WHERE email = '$email'";
        $result = mysqli_query($conn, $existsemail);

        if(!$result){
            throw new Exception("Database Error: " . mysqli_error($conn));
        }
        if(mysqli_num_rows($result) > 0){
            throw new Exception("Email already exists. Please use another email.");
        }
        if($password == ''){
            throw new Exception("Password is required");
        }

        if($cpassword == ''){
            throw new Exception("Confirm Password is required");
        }
        if($password !== $cpassword){
            throw new Exception("Passwords do not match");
        }
        if($agree_terms != '1'){
            throw new Exception("You must agree to the Terms & Conditions");
        }

        $patientId = "Pat-" . time() . rand(100, 999);
        $token = md5(uniqid());
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO patients (patientid, name, email, password, token,status) VALUES ('$patientId', '$name', '$email', '$hashedPassword', '$token', 'pending')";
        $query_run = mysqli_query($conn, $query);
        if($query_run){
            $mail = new PHPMailer(true);
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
                $mail->Subject = 'Your Verification Link for Patient Registration';

                $mail->Body = '
                <html>
                <body style="font-family: Arial;">
                    <h2>Patient Registration</h2>
                    <p>Hello,</p>
                    <p>Thank you for registering with us.</p>
                    <p>Please click below to verify your email address.</p>
                    <a href="'.ADMIN_URL.'verify_email.php?email='.urlencode($email).'&token='.$token.'"
                       style="background-color: #007bff; color: white;
                       padding: 10px 125px; text-decoration: none;">
                       Verify Email
                    </a>
                    <p>Thank you,<br>Doctor Appointment Team</p>
                </body>
                </html>
                ';

                $mail->isHTML(true);
                if($mail->send()){
                    $success_message  = "Registration successful! Please check your email to verify your account.";
                }else {
                    throw new Exception("Message could not be sent. Error: " . $mail->ErrorInfo);
                }
            } catch (Exception $e) {
                echo "Message could not be sent. Error: " . $mail->ErrorInfo;
            }
        }else {
            throw new Exception("Failed to register patient. Please try again.");
        }
    }
    catch(Exception $e){
        $error_message = $e->getMessage();
    }
}
?>


<!-- //31:37 video 10.1 -->
<!-- PATIENT REGISTRATION -->
<section id="patient">
    <section class="page-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="./index.php" class="nav-link" data-page="home">Home</a>
                <span>›</span>
                Patient Registration
            </div>

            <h1>Patient Registration</h1>
            <p>
                Create a new patient account.
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

                    <h2>Welcome to Our Platform</h2>
                    <p class="login-subtitle">
                        Create your patient account
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
                    <form id="patientLoginForm" method="POST" novalidate>
                        <div class="input-group">
                            <label for="patientName">
                                Name
                            </label>
                            <input type="text" id="patientName" name = "name" placeholder="John Doe" required>
                        </div>
                        <div class="input-group">
                            <label for="patientEmail">
                                Email Address
                            </label>
                            <input type="email" id="patientEmail" name = "email" placeholder="patient@email.com" required>
                        </div>

                        <div class="input-group">
                            <label for="patientPassword">
                                Password
                            </label>

                            <div class="password-box">
                                <input type="password" id="patientPassword" name = "password" placeholder="••••••••" required>
                                <span class="toggle-password" id="togglePatientPassword">👁</span>
                            </div>
                        </div>

                        <div class="input-group">
                            <label for="patientConfirmPassword">
                                Confirm Password
                            </label>

                            <div class="password-box">
                                <input type="password" id="patientConfirmPassword" name = "cpassword" placeholder="••••••••" required>
                                <span class="toggle-password" id="togglePatientConfirmPassword">👁</span>
                            </div>
                        </div>

                        <div class="login-options">
                            <label class="remember ">
                                <input type="checkbox" id="rememberPatient" name="agree_terms" value="1">
                                I agree to the Terms & Conditions</a>
                            </label>
                        </div>

                        <button type="submit" name="submit" class="login-btn">
                            Register patient account
                        </button>

                    </form>

                    <div class="login-footer">
                        <p>
                            Already have an account?
                            <a href="./patient-login.php">
                                Sign In
                            </a>
                        </p>
                    </div>

                    <div class="login-divider">
                        <span>
                            Are you a doctor?
                        </span>
                    </div>
                    <a href="./doctor-login.php">
                        <button class="doctor-switch-btn " data-page="doctor-login">
                            Doctor Login →
                        </button>
                    </a>
                </div>
            </div>
        </section>
    </div>
</section>
<?php include ('frontend_footer.php'); ?>